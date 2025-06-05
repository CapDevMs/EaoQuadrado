<?php

namespace App\Controllers;

use Core\View;

class cadastroAdmController extends Controller
{

    public function cadastrarAdm()
    {
        View::render('admin/cadastro_adm');
    }
}