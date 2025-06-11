<?php

namespace App\Controllers;

use Core\View;

class PerfilVendedorController extends Controller
{

    public function vendedor()
    {
        View::render('vendedor/meuPerfilVendedor');
    }
}