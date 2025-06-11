<?php

namespace App\Controllers;

use Core\View;

class MeuPerfilVendedorController extends Controller
{

    public function meuPerfilVendedor()
    {
        View::render('vendedor/meu_perfil_vendedor');
    }
}