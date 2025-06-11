<?php

namespace App\Controllers\Admin;

use Core\View;
use App\Controllers\Controller;

class ValidacaoNovoVendedorController extends Controller
{

    public function validacaoNovoVendedor()
    {
        View::render('admin/validacaoNovoVendedor');

    }
}