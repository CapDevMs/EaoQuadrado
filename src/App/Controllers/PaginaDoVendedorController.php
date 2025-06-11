<?php

namespace App\Controllers;

use Core\View;

class PaginaDoVendedorController extends Controller
{

    public function paginaDoVendedor()
    {
        View::render('vendedor/pagina_do_vendedor');
    }
}