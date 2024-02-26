<?php

namespace App\Controllers;

class CoreController{

     /**
     * Altorouter container
     *
     * @var AltoRouter
     */
    private $router;

    public function __construct($router){
        
        $this->router = $router;
    }

    /**
     * Display the page
     *
     * @param string $viewName
     */
    public function show(string $viewName, $params =[]){

        $router = $this->router;
        
        include __DIR__."/../views/site/header.tpl.php";
        include __DIR__."/../views/site/$viewName.tpl.php";
        include __DIR__."/../views/site/footer.tpl.php";
    }

    public function __toString()
    {
        
    }


}