<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/all', 'Home::getAll');
$routes->post('/store', 'Home::store');
$routes->get('/edit/(:num)', 'Home::edit/$1');
$routes->post('/update', 'Home::update');
$routes->delete('/delete/(:num)', 'Home::delete/$1');

