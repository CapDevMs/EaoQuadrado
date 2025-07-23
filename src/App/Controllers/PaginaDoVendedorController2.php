<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;

class PaginaDoVendedorController2 extends Controller
{

    public function paginaDoVendedor2()
    {
        View::render(view: '/pagina_do_vendedor');
    }s
}