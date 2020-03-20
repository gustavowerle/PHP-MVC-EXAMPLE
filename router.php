<?php

$router = new GW01\Router;

$router['/'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'index'
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