<?php

namespace App\Controllers;

use Core\View;

class cadastroAdm extends Controller
{

    public function cadastroAdm()
    {
        View::render('admin/cadastro_adm');
    }
}