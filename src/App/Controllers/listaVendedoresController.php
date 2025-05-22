<?php

namespace App\Controllers;

use Core\View;

class listaVendedoresController extends Controller
{

    public function lista_vendedores()
    {
        View::render('admin/lista_de_vendedores');
    }
}