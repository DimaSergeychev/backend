<?php
require_once "ToyotaController.php"; 

class ToyotaImageController extends ToyotaController {
    public $template = "image.twig";
    
    public function getContext() : array
    {
        $context = parent::getContext(); 
        
        return $context;
    }

}