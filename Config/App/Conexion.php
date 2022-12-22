 <?php
class Conexion
{
    private $cnx;

    public function __construct()
    {
        $cadena = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        try {
            $this->cnx = new PDO($cadena, DB_USER, DB_PASSWORD);
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function conect()
    {
        return $this->cnx;
    }

    public static function query($sql, $params = [])
    {
        $db = new Conexion();
        $link = (object) $db->conect();
        $link->beginTransaction();
        $query = $link->prepare($sql);

        if (!$query->execute($params)) {
            $link->rollBack();
            $error = $query->errorInfo();
            throw new Exception($error[2]);
        }

        if (strpos($sql, 'SELECT') !== false) {           
            return $query->rowCount() > 0 ? $query->fetchAll(PDO::FETCH_ASSOC) : false;
        } else if (strpos($sql, 'INSERT') !== false) {
            $id = $link->lastInsertId();
            $link->commit();
            return $id;
        } else if (strpos($sql, 'UPDATE') !== false) {
            $link->commit();
            return true;
        } else if (strpos($sql, 'DELETE') !== false) {
            if ($query->rowCount() > 0) {
                $link->commit();
                return true;
            } else {
                $link->rollBack();
                return false;
            }
        } else {
            $link->commit();
            return true;
        }
    }
}
