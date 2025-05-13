<?php

namespace App\Controllers;

use Core\View;

class aprovadosController extends Controller
{
    public function conta()
    {
        View::render('admin/contas_aprovadas_reprovadas');
        // View::render('homepage');
    }
}