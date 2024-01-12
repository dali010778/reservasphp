<?php
class Servicio extends Controller{

    public function __construct() {
       parent::__construct();
    }

    public function Index() {
        $data['title'] = 'Servicios';
        $data['subtitle'] = 'Nuestros Servicios';
        $this->views->getView('principal/servicios/index', $data);
    }
}


?>