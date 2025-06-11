<?php

namespace App\Controllers\Admin;

use Core\View;
use App\Controllers\Controller;

class ListaVendedoresController extends Controller
{

    public function listaDeVendedores()
    {
        View::render('admin/lista_de_vendedores');

    }
}