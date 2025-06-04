<?php

namespace App\Controllers;

use Core\View;

class MinhaLojaController extends Controller
{

    public function minhaLoja()
    {
        View::render('vendedor/minha_loja');
    }
}