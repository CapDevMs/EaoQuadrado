<?php

namespace App\Controllers;

use Core\View;

class TrocasDevolucoesController extends Controller
{

    public function trocasDevolucoes()
    {
        View::render('vendedor/troca_devolucao_cancelamento');

    }
}