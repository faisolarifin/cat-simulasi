<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/soalcat', 'Home::soalCat');
$routes->get('/allsoal', 'Home::allSoal');
$routes->post('/saveanswer', 'Home::saveAnswer');
