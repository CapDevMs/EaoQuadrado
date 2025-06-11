<?php

namespace App\Controllers\Cliente;

use Core\View;
use App\Controllers\Controller;

class FavoritosController extends Controller
{

    public function favoritos()
    {
        View::render('cliente/favoritos');
    }
}