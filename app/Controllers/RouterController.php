<?php

namespace App\Controllers;

use AltoRouter;
use App\Controllers\MainController;

class RouterController
{

    /**
     * Altorouter container
     *
     * @var Altorouter
     */
    private $router;

    public function __construct()
    {
        $this->router = new AltoRouter();
        $this->router->setBasePath($_SERVER['BASE_URI']);
        return $this->router;
    }

    /**
     * Method to create a route, needs 3 params (4th is optionnal)
     * METHOD : The HTTP Method the route gonna call
     * URL: The Url were the routes point
     * TARGET: the method call by the route (to work properly must be an array ['controller'=>'controllerName','method'=>'methodName'])
     * NAME[Optionnal]: The route name, it's used to generate navigation url
     */
    public function addRoutes(string $method, string $url, array $target, string $routeName = '')
    {
        $this->router->map($method, $url, $target, $routeName);
    }

    /**
     * handle the routes requested.
     * If the result don't match, redirection to ErrorController@err404
     * else create an instance of the controller passed in the addRoutes $target array and call the linked method
     */
    public function handleRequest()
    {
        $match = $this->router->match();
        if ($match === false) {
            $controllerName = 'ErrorController';
            $methodName = 'err404';
        } else {
            $target = $match['target'];
            $controllerName = "App\Controllers\\" . $target['controller'];
            $methodName = $target['method'];
            $controller = new $controllerName();
            $controller->$methodName();
        }
    }
}
