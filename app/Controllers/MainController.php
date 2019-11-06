<?php

namespace App\Controllers;

class MainController extends CoreController{


    private $router;

    public function __construct($router){
        $this->$router = $router;
    }

    /**
     * Methods to test stuff
     * Comment or Delete in production
     */
    public function test(){
        $this->show('test');
    }

    public function landing(){
        $this->show('landing');
    }
}