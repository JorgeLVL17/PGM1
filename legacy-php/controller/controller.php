<?php
class Controller {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function index() {
        // El controlador pide datos al modelo y los envía a la vista
        $data = $this->model->message;
        $contenido = $this->model->contenido;
        $url_med = $this->model->url_med;
        $titulo_med=$this->model->titulo_med;
        $contenido_med = $this->model->contenido_med;
        
        $url_sis = $this->model->url_sis;
        $titulo_sis = $this->model->titulo_sis;
        $contenido_sis = $this->model->contenido_sis;

        $url_der = $this->model->url_der;
        $titulo_der = $this->model->titulo_der;
        $contenido_der = $this->model->contenido_der;
        
        $this->view->render(
            $data, $contenido, 
            $url_med, $titulo_med, $contenido_med,
            $url_sis, $titulo_sis, $contenido_sis,
            $url_der, $titulo_der, $contenido_der
        );
    }
}
?>
