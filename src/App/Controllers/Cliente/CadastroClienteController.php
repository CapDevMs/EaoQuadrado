<?php

namespace App\Controllers\Cliente;

use Core\View;
use App\Controllers\Controller;


class CadastroClienteController extends Controller
{

    public function cadastroCliente()
    {
        View::render('cadastros/cadastro_cliente');
    }
}