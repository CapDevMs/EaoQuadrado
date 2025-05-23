<?php

namespace App\Controllers;

use Core\View;

class CadastrarProdutoVendedorController extends Controller
{

    public function cadastrar_produto()
    {
        View::render('vendedor/cadastrar_produto_vendedor');
    }
}