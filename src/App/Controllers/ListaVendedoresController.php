<?php

namespace App\Controllers;

use Core\View;

class ListaVendedoresController extends Controller
{

    public function listaDeVendedores()
    {
        View::render('admin/lista_de_vendedores');

    }
}