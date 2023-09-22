<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/prod', 'ProductController::eryel');
$routes->get('/prod/(:any)', 'ProductController::prod/$1');
$routes->post('/save', 'ProductController::save');
$routes->get('/delete/(:any)', 'ProductController::delete/$1');
$routes->get('/edit/(:any)', 'ProductController::edit/$1');
$routes->post('/Categorysave', 'ProductController::Categorysave');
$routes->get('/Categorydelete/(:any)', 'ProductController::Categorydelete/$1');
$routes->get('/Categoryedit/(:any)', 'ProductController::Categoryedit/$1');