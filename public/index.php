<?php 

require_once '../vendor/autoload.php';
require_once "../controllers/MainController.php";
require_once "../controllers/ObjectController.php";
require_once "../controllers/ToyotaController.php";
require_once "../controllers/ToyotaImageController.php";
require_once "../controllers/ToyotaInfoController.php";
require_once "../controllers/Controller404.php";
require_once "../controllers/BMWController.php";
require_once "../controllers/BMWImageController.php";
require_once "../controllers/BMWInfoController.php";
$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader);
$url = $_SERVER["REQUEST_URI"];

$context = [];
$controller = new Controller404($twig);

if ($url == "/") {
    $controller = new MainController($twig);
} elseif (preg_match("#^/Toyota/image#", $url)) { 
    $controller = new ToyotaImageController($twig);
} elseif (preg_match("#^/Toyota/info#", $url)) {
    $controller = new ToyotaInfoController($twig);
} elseif (preg_match("#^/Toyota#", $url)) {
    $controller = new ToyotaController($twig);
} elseif (preg_match("#^/BMW/image#", $url)) { 
    $controller = new BMWImageController($twig);
} elseif (preg_match("#^/BMW/info#", $url)) {
    $controller = new BMWInfoController($twig);
} elseif (preg_match("#^/BMW#", $url)) {
    $controller = new BMWController($twig);
}

if ($controller) {
    $controller->get();
}