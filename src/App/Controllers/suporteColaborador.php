<?php

namespace App\Controllers;

use Core\View;

class suporteColaborador extends Controller
{

    public function suporte_colaborador()
    {
        View::render('admin/suporte_ao_colaborador');
    }
}