<?php

namespace App\Controllers\Cliente;

use Core\View;
use App\Controllers\Controller;

class PerfilClienteController extends Controller
{

    public function cliente()
    {
        View::render('cliente/meuPerfilCliente');
    }
}