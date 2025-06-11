<?php

namespace App\Controllers;

use Core\View;

class CadastroClienteController extends Controller
{

    public function cadastroCliente()
    {
        View::render('cadastros/cadastro_cliente');
    }
}