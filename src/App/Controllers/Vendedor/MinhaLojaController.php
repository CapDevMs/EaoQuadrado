<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;

class MinhaLojaController extends Controller
{

    public function minhaLoja()
    {
        View::render('vendedor/minha_loja');
    }
}