<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);

$routes->group('user', static function($routes) {
    $routes->get('login', 'AuthenticationController::loginUserIndex', ['as' => 'userLoginPage']);
    $routes->post('login', 'AuthenticationController::loginUser', ['as' => 'userLogin']);

    $routes->get('register', 'AuthenticationController::registerUserIndex', ['as' => 'userRegisterPage']);
    $routes->post('register', 'AuthenticationController::registerUser', ['as' => 'userRegister']);
});
