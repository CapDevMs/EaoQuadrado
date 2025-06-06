<?php

namespace App\Controllers;

use Core\View;

class CriarCategoriaController extends Controller
{

    public function criarCategoria()
    {
        View::render('admin/criar_categoria');

    }
}