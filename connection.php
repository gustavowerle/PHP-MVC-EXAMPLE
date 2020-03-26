<?php
$this->pdo = new \PDO(
    'mysql:
     host=localhost;
     dbname=php_mvc',
    'root',
    'cqjgVCbR',
    [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
);