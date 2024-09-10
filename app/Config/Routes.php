<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('examples', ['namespace' => 'App\Controllers\API'], function(
    $routes
){
//artesanos

$routes->get('ejercicio1', 'Example::ejercicio1');
$routes->get('ejercicio2', 'Example::ejercicio2');


});
