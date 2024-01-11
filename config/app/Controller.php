<?php
class Controller{
    protected $model, $views;

    public function __construct()
    {
        $this->views = new Views();
        $this->cargarModel();
    }

    public function cargarModel() {
        $isAdmin = strpos($_SERVER['REQUEST_URI'], '/' . ADMIN) !== false;
        $nombremodel = get_class($this) . 'Model';
        $ruta = ($isAdmin) ? 'models/admin/' . $nombremodel . '.php' : 'models/principal/' . $nombremodel . '.php' ;
        if (file_exists($ruta)) {
            require_once $ruta;
            $this->model = new $nombremodel();
        }
    }
}




?>