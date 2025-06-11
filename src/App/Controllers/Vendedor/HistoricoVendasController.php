<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;

class HistoricoVendasController extends Controller
{

    public function historicoDeVendas()
    {
        View::render('vendedor/historico_vendas');
    }
}