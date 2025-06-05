<?php

namespace App\Controllers;

use Core\View;

class cadastroAdmController extends Controller
{

    public function cadastroAdm()
    {
        View::render('admin/cadastro_adm');
    }
}