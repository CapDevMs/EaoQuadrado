<?php

namespace App\Controllers;

use Core\View;

class categoriaController extends Controller
{

    public function categoria()
    {
        View::render('categoria');
    }
}