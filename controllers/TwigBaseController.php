<?php
require_once "BaseController.php";

class TwigBaseController extends BaseController {
    public $title = "";
    public $template = ""; 
    public $menu = [
        [
            "title" => "Главная",
            "url" => "/",
        ],
        [
            "title" => "Toyota",
            "url" => "/Toyota",
        ],
        [
            "title" => "BMW",
            "url" => "/BMW",
        ]
    ];
    
    protected \Twig\Environment $twig; 
    
    public function __construct($twig)
    {
        $this->twig = $twig; 
    }
    
    public function getContext() : array
    {
        $context = parent::getContext(); 
        $context['title'] = $this->title; 
        $context['menu'] = $this->menu; 
        $context['url'] = $_SERVER["REQUEST_URI"];

        return $context;
    }
    
    public function get() {
        echo $this->twig->render($this->template, $this->getContext());
    }
}