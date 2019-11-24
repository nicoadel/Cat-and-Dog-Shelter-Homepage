<?php

namespace App\Controllers;

class CoreController{

    private $router;

    public function __construct($router = ''){
        $this->$router = $router;
    }

    /**
     * Display the page
     *
     * @param string $viewName
     */
    public function show(string $viewName, $params =[]){
        include __DIR__."/../views/site/header.tpl.php";
        include __DIR__."/../views/site/$viewName.tpl.php";
        include __DIR__."/../views/site/footer.tpl.php";
    }


}