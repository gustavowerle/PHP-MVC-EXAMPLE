<?php

namespace App\Controllers;

use GW01\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $this->render(['table' => $this->model->getTableName()]);
    }

    // public function create(){
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         // chamar o model e salvar no banco
    //     };
    // }
}