<?php

namespace App\Controllers\Admin;

use Core\View;
use App\Controllers\Controller;

class CriarCategoriaController extends Controller
{

    public function criarCategoria()
    {
        View::render('admin/criar_categoria');

    }
}