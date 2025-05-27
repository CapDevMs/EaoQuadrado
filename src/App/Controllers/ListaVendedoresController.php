<?php

namespace App\Controllers;

use Core\View;

class ListaVendedoresController extends Controller
{

    public function lista()
    {
        View::render('admin/lista_de_vendedores');
        //View::render('homepage');
    }
}