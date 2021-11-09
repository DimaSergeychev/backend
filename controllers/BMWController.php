<?php
require_once "ObjectController.php"; 

class BMWController extends ObjectController {
    public $template = "object.twig";
    public $title = "BMW";
    public $images = [
        "/images/BMW.jpg",
    ];
    public $url_image = "/BMW/image";
    public $url_info = "/BMW/info";

    public function getContext() : array
    {
        $context = parent::getContext(); // вызываем родительский метод
        $context['is_image'] = $context['url'] == "/BMW/image";
        $context['is_info'] = $context['url'] == "/BMW/info";
        $context['url_image'] = "/BMW/image";
        $context['url_info'] = "/BMW/info";
        return $context;
    }
}