<?php

namespace App\Controllers;

use Core\View;

class CadastrarProdutoVendedorController extends Controller
{

    public function cadastrarProduto()
    {
        View::render('vendedor/cadastrar_produto_vendedor');
    }
}