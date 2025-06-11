<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;

class PaginaDoVendedorController extends Controller
{

    public function paginaDoVendedor()
    {
        View::render('vendedor/pagina_do_vendedor');
    }
}