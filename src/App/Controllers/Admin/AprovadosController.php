<?php

namespace App\Controllers\Admin;

use Core\View;
use App\Controllers\Controller;

class AprovadosController extends Controller
{
    public function contasAprovadasReprovadas()
    {
        View::render('admin/contas_aprovadas_reprovadas');
    }
}