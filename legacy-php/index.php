<?php


require_once './model/model.php';
require_once './view/view.php';
require_once './controller/controller.php';

$model = new Model();
$view = new View();

$controller = new Controller($model, $view);

// Ejecuta la acción principal
$controller->index();

?>
