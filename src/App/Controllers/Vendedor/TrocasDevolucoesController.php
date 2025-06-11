<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;

class TrocasDevolucoesController extends Controller
{

    public function trocasDevolucoes()
    {
        View::render('vendedor/troca_devolucao_cancelamento');

    }
}