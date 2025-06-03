<?php

namespace App\Controllers;

use Core\View;

class cadastroAdm extends Controller
{

    public function cadastrarAdm()
    {
        View::render('admin/cadastro_adm');
    }
}