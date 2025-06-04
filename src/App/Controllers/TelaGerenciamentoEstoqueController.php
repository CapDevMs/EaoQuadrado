<?php

namespace App\Controllers;

use Core\View;

class TelaGerenciamentoEstoqueController extends Controller
{

    public function estoque()
    {
        View::render('vendedor/tela_gerenciamento_estoque');
    }
}