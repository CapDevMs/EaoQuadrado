<?php

namespace App\Controllers;

use Core\View;

class AprovadosController extends Controller
{
    public function contasAprovadasReprovadas()
    {
        View::render('admin/contas_aprovadas_reprovadas');
    }
}