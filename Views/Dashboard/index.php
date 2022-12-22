<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Assets/css/styles.css">
    <link rel="stylesheet" href="Assets/css/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/fontawesome/fontawesome.min.css">
    <title><?php echo $data['page_name']; ?></title>
</head>

<body>
    <div class="wrapper">

        <!-- Sidebar -->
        <nav id="sidebar" class="shadow">
            <a href="dashboard" style="text-decoration: none;color:#000;">
                <div class="d-flex pt-2 pl-2">
                    <img src="Assets/img/uni_gray_xs.png" alt="" class="m-0 pl-1 pr-2" style="height:45px;">
                    <div class="d-flex flex-column">
                        <span class="d-block">UNI EARPFIM</span>
                        <span class="d-block" style="font-size: 12px;">PRACTICANTE</span>
                    </div>
                </div>
            </a>
            <ul class="list-unstyled mt-4">
                <li class="active limain">
                    <a href="#pageGeneral" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-business-time mr-2"></i>General</a>
                    <ul class="collapse list-unstyled bgelements" id="pageGeneral">
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Aula Virtual FM</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Mi horario de Clases</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Informacion Docente</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Mis Cursos Asignados</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Tutoria Alumnos</a>
                        </li>
                        <li>
                            <a href="attendance"><i class="fab fa-slack-hash mr-2"></i>Asistencia</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Cargar Notas ORCE</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Biblioteca Virtual</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Mi disponibilidad</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Reclamo del reclamo docente</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Correcion de Notas</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Ayuda en Aula</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Aula Virtual Titulacion</a>
                        </li>
                    </ul>
                </li>
                <li class="limain">
                    <a href="#pageAdmin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-business-time mr-2"></i>Administrador</a>
                    <ul class="collapse list-unstyled bgelements" id="pageAdmin">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li class="limain">
                    <a href="#pageAcreditacion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-business-time mr-2"></i>Acreditacion FIM</a>
                    <ul class="collapse list-unstyled bgelements" id="pageAcreditacion">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li class="limain">
                    <a href="#pageVirtual" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-business-time mr-2"></i>Virtual</a>
                    <ul class="collapse list-unstyled bgelements" id="pageVirtual">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li class="limain">
                    <a href="#pageDocAcad" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-business-time mr-2"></i>Documentos Academicos</a>
                    <ul class="collapse list-unstyled bgelements" id="pageDocAcad">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info btnavbar">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </nav>
            <main class="mdl-layout__content d-flex">
            </main>
        </div>
    </div>
    </div>

    </div>
    <script src="Assets/js/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="Assets/js/boostrap/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="Assets/js/for.preview.js"></script>
    <script src="Assets/js/funciones.js"></script>
    <script src="Assets/js/for.modals.js"></script>
</body>

</html>