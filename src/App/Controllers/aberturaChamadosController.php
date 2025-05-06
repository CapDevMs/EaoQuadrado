<?php

namespace App\Controllers;

use Core\View;

class aberturaChamadosController extends Controller
{

    public function chamados()
    {
        View::render('admin.abertura-de-chamados');
    }
}