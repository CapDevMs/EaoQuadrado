<?php

namespace App\Controllers;

use Core\View;

class ValidacaoNovoVendedorController extends Controller
{

    public function validacaoNovoVendedor()
    {
        View::render('admin/validacaoNovoVendedor');

    }
}