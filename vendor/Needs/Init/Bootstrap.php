<?php

namespace Needs\Init;

abstract class Bootstrap{
    private $routes;

    abstract protected function Routes();

    public function __construct(){
        $this->Routes();
        $this->run($this->getUri());
    }

    protected function setRoutes($routes){
        $this->routes = $routes;
    }

    private function run($uri){
        foreach($this->routes as $page => $route){
            if ($uri == $route['route']){
                $class = 'App\\Controllers\\' . $route['controller'];
                $action = $route['action'];

                $controller = new $class();
                $controller->$action();
            }
        }
    }

    private function getUri(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
