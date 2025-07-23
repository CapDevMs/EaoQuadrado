<?php

namespace App\Controllers\Cliente;

use Core\View;
use App\Controllers\Controller;
use App\Models\Carrinho;

class CarrinhoController extends Controller
{

    public function carrinho()
    {
        $carrinhoModel = new Carrinho();
        $produtos = $carrinhoModel -> carrinho();
        View::render('cliente/carrinho',['listaProdutos' => $produtos]);;
    }
}