<?php
class Principal extends Controller{

    public function __construct() {
       parent::__construct();
    }

    public function Index() {
        $data = limitar_cadena('hola este es un titulo de un post', 7, '...');
        print_r($data);
        //$this->views->getView('principal','index', $data);
    }
}


?>