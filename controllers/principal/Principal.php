<?php
class Principal extends Controller{

    public function __construct() {
       parent::__construct();
    }

    public function Index() {
        $data['title'] = 'Pagina Principal';
        //Traer Sliders
        $data['sliders'] = $this->model->getSliders();
        $this->views->getView('index', $data);
    }
}


?>