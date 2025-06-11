<?php

namespace App\Controllers;

use Core\View;

class HistoricoDePedidosController extends Controller
{

    public function historicoDePedidos()
    {
        View::render('/cliente/historicoPedidos');

    }
}