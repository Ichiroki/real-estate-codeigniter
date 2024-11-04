<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('user', static function($routes) {
    $routes->get('login', 'AuthenticationController::loginUserIndex', ['as' => 'userLogin']);
});
