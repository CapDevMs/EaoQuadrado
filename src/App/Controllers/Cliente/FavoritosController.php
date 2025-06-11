<?php

namespace App\Controllers;

use Core\View;

class FavoritosController extends Controller
{

    public function favoritos()
    {
        View::render('cliente/favoritos');
    }
}