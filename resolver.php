<?php

$resolver = new GW01\Resolver;

$resolver['PDO'] = function ($r) {
    return new PDO('mysql:host=localhost;dbname=bloglaravel','root', 'cqjgVCbR', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
};

return $resolver;