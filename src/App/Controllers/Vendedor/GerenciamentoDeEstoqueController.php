<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;

class GerenciamentoDeEstoqueController extends Controller
{

    public function gerenciamentoDeEstoque()
    {
        View::render('vendedor/tela_gerenciamento_estoque');

    }
}