<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductController::PrincessManibo');
$routes->get('/product/(:any)', 'ProductController::product/$1');
$routes->post('/Save', 'ProductController::Save');
$routes->get('/Delete/(:any)', 'ProductController:Delete/$1');
$routes->get('/edit/(:any)', 'ProductController::edit/$1');