<?php

namespace App\Controllers;

use Core\View;

class perfilVendedor extends Controller
{

    public function vendedor()
    {
        View::render('vendedor/meuPerfilVendedor');
    }
}