<?php

namespace App\Controllers;

use Core\View;

class CarrinhoController extends Controller
{

    public function carrinho()
    {
        View::render('/carrinho');
    }
}