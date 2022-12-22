<?php

class Controller
{
    public function __construct()
    {
        $this->views = new Views();
        $this->cargarModel();
    }

    public function cargarModel()
    {
        $model = get_class($this) . "Model";
        $route = "Models/" . $model . ".php";

        if (file_exists($route)) {
            require_once $route;
            $this->model = new $model();
        }
    }
}
