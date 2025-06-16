<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;

class MeuPerfilVendedorController extends Controller
{

    public function meuPerfilVendedor()
    {
        View::render('vendedor/meu_perfil_vendedor');
    }
}