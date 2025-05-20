<?php

namespace App\Controllers;

use Core\View;

class CadastroProdVendController extends Controller
{

    public function CadastroProd()
    {
        View::render('vendedor/cadastrar_produto_vendedor');
    }
}