<?php

namespace App\Controllers;

use Core\View;

class cadastrar_prod_vendController extends Controller
{

    public function cadastroProdutoVendedor()
    {
        View::render('vendedor/cadastrar_produto_vendedor');
    }
}