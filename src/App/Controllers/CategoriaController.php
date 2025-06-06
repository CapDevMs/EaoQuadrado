<?php

namespace App\Controllers;

use Core\View;

class CategoriaController extends Controller
{

    public function categoria()
    {
        View::render('/categoria');
    }
}