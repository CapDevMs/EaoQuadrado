<?php

namespace App\Controllers;

use Core\View;

class AberturaChamadosController extends Controller
{

    public function chamados()
    {
        View::render('admin/abertura-de-chamados');
    }
}