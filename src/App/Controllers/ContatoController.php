<?php

namespace App\Controllers;

use Core\View;

class ContatoController extends Controller
{

    public function contato()
    {
        View::render('/contato');

    }
}