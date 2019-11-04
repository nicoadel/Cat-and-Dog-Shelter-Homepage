<?php

namespace App\Controllers;
use App\Controllers\RouterController;

class AppController {

    public static function run(){
        $router = new RouterController();

        $router->addRoutes('GET','/tests',['controller'=>'MainController','method'=>'test'],'main-test');
        $router->handleRequest();
    }
    
}