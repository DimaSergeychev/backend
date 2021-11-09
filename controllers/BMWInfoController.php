<?php
require_once "BMWController.php";

class BMWInfoController extends BMWController {
    public $template = "BMW_info.twig";
    
    public function getContext(): array
    {
        $context = parent::getContext(); 


        return $context;
    }
}