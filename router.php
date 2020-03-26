<?php

$router = new GW01\Router;

$router['/'] = [
    'class' => App\Controllers\HomeController::class,
    'action' => 'index'
];

$router['/login'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'login'
];

$router['/session'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'startSession'
];

$router['/logout'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'logout'
];

$router['/registro'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'create'
];

$router['/products'] = [
    'class' => App\Controllers\ProductsController::class,
    'action' => 'index'
];

return $router;