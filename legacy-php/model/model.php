<?php
class Model {
    public $message;
    public $contenido;
    public $url_med;
    public $titulo_med;
    public $contenido_med;

    public $url_sis;
    public $titulo_sis;
    public $contenido_sis;

    public $url_der;
    public $titulo_der;
    public $contenido_der;

    public function __construct() {
        $this->message = "Diario Digital UNIFRANZ";
        $this->contenido = "Esto es una prueba Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ipsa repellat amet delectus rerum ex nam nostrum recusandae qui harum, possimus laborum cupiditate necessitatibus impedit tempore libero, facilis dignissimos! Aliquid";
        $this->url_med = "https://unifranz.edu.bo/wp-content/uploads/2026/02/BLOG-TECNOLOGIA-EN-EL-SALON-DE-CLASES-FOTO-3.png";    
        $this->titulo_med = "Medicina";
        $this->contenido_med = "La carrera de Medicina en UNIFRAN es .....";
        $this->url_sis = "https://dummyimage.com/600x450/55595c/eceeef&text=Thumbnail"; // URL de imagen de relleno
        $this->titulo_sis = "Ing. de Sistemas";
        $this->contenido_sis = "La carrera de Sistemas en UNIFRAN es .....";
        $this->url_der = "https://dummyimage.com/600x450/55595c/eceeef&text=Thumbnail"; // URL de imagen de relleno
        $this->titulo_der = "Derecho";
        $this->contenido_der ="La carrera de Derecho en UNIFRAN es .....";
    }
}
?>
