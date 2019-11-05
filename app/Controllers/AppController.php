<?php

namespace App\Controllers;
use App\Controllers\RouterController;

class AppController {

    /**
     * Method to launch the entire website
     */
    public static function run(){

        /**
         * Call the RouterController to allow developer team to create new routes
         */
        $router = new RouterController();

        
        $router->addRoutes('GET','/tests',['controller'=>'MainController','method'=>'test'],'main-test');
        $router->addRoutes('GET','/',['controller'=>'MainController','method'=>'landing'],'main-landing');
        $router->handleRequest();
    }
    
}