<?php

namespace App\Controllers;

use Core\View;

class CadastroAdmController extends Controller
{

    public function cadastrarAdm()
    {
        View::render('admin/cadastro_adm');
    }
}