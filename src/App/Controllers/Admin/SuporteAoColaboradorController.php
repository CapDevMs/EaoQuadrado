<?php

namespace App\Controllers\Admin;

use Core\View;
use App\Controllers\Controller;

class SuporteAoColaboradorController extends Controller
{

    public function suporteAoColaborador()
    {
        View::render('admin/suporte_ao_colaborador');

    }
}