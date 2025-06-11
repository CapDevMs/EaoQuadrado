<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;

class CadastroVendedorController extends Controller
{

    public function cadastroVendedor()
    {
        View::render('cadastros/cadastro_vendedor');
    }
}