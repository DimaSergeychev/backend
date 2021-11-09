<?php
require_once "ToyotaController.php";

class ToyotaInfoController extends ToyotaController {
    public $template = "Toyota_info.twig";
    
    public function getContext(): array
    {
        $context = parent::getContext(); 


        return $context;
    }
}