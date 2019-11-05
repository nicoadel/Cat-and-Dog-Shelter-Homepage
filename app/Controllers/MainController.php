<?php

namespace App\Controllers;

class MainController extends CoreController{

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