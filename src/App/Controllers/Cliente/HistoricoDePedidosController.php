<?php

namespace App\Controllers\Cliente;

use Core\View;
use App\Controllers\Controller;

class HistoricoDePedidosController extends Controller
{

    public function historicoDePedidos()
    {
        View::render('/cliente/historicoPedidos');

    }
}