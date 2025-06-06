<?php

namespace App\Controllers;

use Core\View;

class HistoricoVendasController extends Controller
{

    public function historicoDeVendas()
    {
        View::render('vendedor/historico_vendas');
    }
}