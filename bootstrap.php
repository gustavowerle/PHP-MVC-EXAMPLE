<?php

require __DIR__ . '/vendor/autoload.php';
$router = require __DIR__ . '/router.php';
$resolver = new GW01\Resolver;;

$object = $router->handler();

$resolver->handler($object['class'], $object['action']);