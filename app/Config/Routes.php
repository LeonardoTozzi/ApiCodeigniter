<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/get-users', 'ApiController::getUsers');
$routes->get('/update-user', 'ApiController::updateUser');
$routes->get('/delete-user', 'ApiController::deleteUser');
$routes->get('/create-user', 'ApiController::createUser');