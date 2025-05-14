<?php

namespace App\Controllers;

use Core\View;

class PaginaVendedorController extends Controller
{

    public function vendedor()
    {
        View::render('vendedor/pagina_do_vendedor');
    }
}