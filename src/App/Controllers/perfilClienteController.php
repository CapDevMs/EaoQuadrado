<?php

namespace App\Controllers;

use Core\View;

class perfilClienteController extends Controller
{

    public function cliente()
    {
        View::render(view: 'cliente/meuPerfilCliente');
    }
}