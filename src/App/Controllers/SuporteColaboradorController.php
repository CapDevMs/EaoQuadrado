<?php

namespace App\Controllers;

use Core\View;

class SuporteColaboradorController extends Controller
{

    public function suporte_colaborador()
    {
        View::render('admin/suporte_ao_colaborador');
    }
}