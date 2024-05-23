<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/pd', 'Home::index');
$routes->get('/addp', 'Home::add');
$routes->post('/add', 'Home::addproject');
$routes->get('/delete/(:any)', 'Home::deleteproject/$1');
$routes->get('/edit/(:any)', 'Home::edit/$1');
$routes->post('/update/(:any)', 'Home::update/$1');