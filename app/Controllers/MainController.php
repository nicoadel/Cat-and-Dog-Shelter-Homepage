<?php

namespace App\Controllers;

use App\Models\DogModel;

class MainController extends CoreController{


    private $router;

    public function __construct($router = ''){
        $this->$router = $router;
    }

    /**
     * Methods to test stuff
     * Comment or Delete in production
     */
    public function test(){
        DogModel::find(3);
    }

    public function landing(){
        $this->show('landing');
    }
}