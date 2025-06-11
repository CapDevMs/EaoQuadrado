<?php

namespace App\Controllers;

use Core\View;

class GerenciamentoDeEstoqueController extends Controller
{

    public function gerenciamentoDeEstoque()
    {
        View::render('vendedor/tela_gerenciamento_estoque');

    }
}