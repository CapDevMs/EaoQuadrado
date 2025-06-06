<?php

namespace App\Controllers;

use Core\View;

class TermosDeUsoController extends Controller
{

    public function termosDeUso()
    {
        View::render('/termos_de_uso');

    }
}