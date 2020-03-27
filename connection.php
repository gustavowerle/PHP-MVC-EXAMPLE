<?php

include_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$this->pdo = new \PDO(
    $_ENV['DB_DRIVER'] . 
    ':host=' . $_ENV['DB_HOST'] .
    ';dbname='. $_ENV['DB_NAME'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASSWORD'],
    [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
);