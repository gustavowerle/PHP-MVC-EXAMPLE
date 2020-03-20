<?php

namespace App\Controllers;

use GW01\Controller;

class UsersController extends Controller
{
    public function index(){
        $user = $this->model->get();
        $this->render($user);
    }

    public function create(){
        return $this->render(['nome' => 'Gustavo']);
    }
}