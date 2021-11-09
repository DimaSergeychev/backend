<?php
require_once "BMWController.php"; 

class BMWImageController extends BMWController {
    public $template = "image.twig";
    
    public function getContext() : array
    {
        $context = parent::getContext(); 
        
        return $context;
    }

}