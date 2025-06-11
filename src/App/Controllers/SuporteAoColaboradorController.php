<?php

namespace App\Controllers;

use Core\View;

class SuporteAoColaboradorController extends Controller
{

    public function suporteAoColaborador()
    {
        View::render('admin/suporte_ao_colaborador');

    }
}