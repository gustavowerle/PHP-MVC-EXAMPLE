<?php

namespace App\Controllers;

use GW01\Controller;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return $this->render(['nome' => 'Gustavo']);
    }

    public function login()
    {
        return $this->render();
    }

    public function startSession()
    {  
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            
            if (!$email || !$password){
                exit;
            }
            
            if(!(new User())->checkRegister($email, $password)){
                exit;
            }

            session_start();
            $_SESSION['user'] = [
                'email' => $email,
                'password' => $password
            ];
            exit;
        } 
        header('location: /login', 200);
    }

    public function logout()
    {
        session_destroy();
        header('location: /');
    }
}