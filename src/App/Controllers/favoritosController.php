<?php

namespace App\Controllers;

use Core\View;

class favoritosController extends Controller
{

    public function favoritos()
    {
        View::render('cliente/favoritos');
    }
}