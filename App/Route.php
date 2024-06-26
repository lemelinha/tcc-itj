<?php

namespace App;
use Needs\Init\Bootstrap;

class Route extends Bootstrap {
    protected function Routes(){
        $routes['index'] = [
            'route' => '/',
            'controller' => 'Index\\IndexController',
            'action' => 'index'
        ];

        $routes['login'] = [
            'route' => '/login',
            'controller' => 'Login\\LoginController',
            'action' => 'index'
        ];

        $this->setRoutes($routes);
    }
}
