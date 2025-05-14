<?php

namespace App\Controllers;

use Core\View;

class cadastros_clienteControlller extends Controller
{

    public function cadastrosCliente()
    {
        View::render('cadastros/cadastro_cliente');
    }
}