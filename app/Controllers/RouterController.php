<?php

namespace App\Controllers;
use AltoRouter;
use App\Controllers\MainController;

class RouterController {

    private $router;

    public function __construct()
    {
        $this->router = new AltoRouter();
        $this->router->setBasePath($_SERVER['BASE_URI']);
        return $this->router;
    }

    public function addRoutes(string $method, string $url, array $target, string $routeName = ''){
        $this->router->map($method,$url,$target,$routeName);
    }

    public function handleRequest(){
        $match = $this->router->match();
        if($match === false){
            $controllerName = 'ErrorController';
            $methodName = 'err404'; 
        }else{
            $target = $match['target'];
            $controllerName = "App\Controllers\\".$target['controller'];
            $methodName = $target['method'];
            $controller = new $controllerName();
            $controller->$methodName();
        }
    }

}