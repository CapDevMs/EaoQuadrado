<?php

namespace App\Controllers\Cliente;

use Core\View;
use App\Controllers\Controller;

class CarrinhoController extends Controller
{

    public function carrinho()
    {
        View::render('cliente/carrinho');
    }
}