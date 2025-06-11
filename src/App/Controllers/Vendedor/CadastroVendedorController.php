<?php

namespace App\Controllers;

use Core\View;

class CadastroVendedorController extends Controller
{

    public function cadastroVendedor()
    {
        View::render('cadastros/cadastro_vendedor');
    }
}