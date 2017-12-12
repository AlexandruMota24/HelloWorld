<?php

nameSpace HelloWorld\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class HelloWorldRouteServiceProvider extends RouteServiceProvider {

    public function map(Router $router) {
        $route->get('hello', 'HelloWorld\Controller\ContentController@sayHello');
    }
}