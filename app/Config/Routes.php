<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/create', 'Home::create');
$routes->post('/update/(:num)', 'Home::update/$1');
$routes->delete('/delete/(:num)', 'Home::delete/$1');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');

