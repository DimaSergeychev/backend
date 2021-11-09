<?php
require_once "ObjectController.php"; 

class ToyotaController extends ObjectController {
    public $template = "object.twig";
    public $title = "Toyota";
    public $images = [
        "/images/Toyota.jpg",
    ];
    public $url_image = "/Toyota/image";
    public $url_info = "/Toyota/info";
    
    public function getContext() : array
    {
        $context = parent::getContext(); // вызываем родительский метод
        $context['is_image'] = $context['url'] == "/Toyota/image";
        $context['is_info'] = $context['url'] == "/Toyota/info";
        $context['url_image'] = "/Toyota/image";
        $context['url_info'] = "/Toyota/info";
        return $context;
    }
}