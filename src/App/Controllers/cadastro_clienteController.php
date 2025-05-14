<?php

namespace App\Controllers;

use Core\View;

class cadastro_clienteController extends Controller
{

    public function cadastrosCliente()
    {
        View::render('cadastros/cadastro_cliente');
    }
}