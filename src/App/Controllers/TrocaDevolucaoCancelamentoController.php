<?php

namespace App\Controllers;

use Core\View;

class TrocaDevolucaoCancelamentoController extends Controller
{

    public function trocaDevolucaoCancelamento()
    {
        View::render('vendedor/troca_devolucao_cancelamento');
    }
}