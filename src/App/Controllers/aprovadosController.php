<?php

namespace App\Controllers;

use Core\View;

class AprovadosController extends Controller
{
    public function historicoDeContas()
    {
        View::render('admin/contas_aprovadas_reprovadas');
        // View::render('homepage');
    }
}