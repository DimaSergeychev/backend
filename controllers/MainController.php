<?php
require_once "TwigBaseController.php"; 

class MainController extends TwigBaseController {
    public $template = "main.twig";
    public $title = "Главная";
    public $menu_Toyota = [
        [
            "title" => "Toyota",
            "url" => "/Toyota",
        ],
        [
            "title" => "Картинка",
            "url" => "/Toyota/image",
        ],
        [
            "title" => "Информация",
            "url" => "/Toyota/info",
        ]
    ];
    public $menu_BMW = [
        [
            "title" => "BMW",
            "url" => "/BMW",
        ],
        [
            "title" => "Картинка",
            "url" => "/BMW/image",
        ],
        [
            "title" => "Информация",
            "url" => "/BMW/info",
        ]
    ];

    public function getContext() : array
    {
        $context = parent::getContext(); 
        $context['menu_Toyota'] = $this->menu_Toyota; 
        $context['menu_BMW'] = $this->menu_BMW; 

        return $context;
    }
}