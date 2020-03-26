<?php
session_start();

$user = $_SESSION['user'] ?? null;
if (!$user){
    header('location: /login');
    exit;
}