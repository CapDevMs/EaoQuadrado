<?php

namespace App\Controllers;

use Core\View;

class CadastroAdminController extends Controller
{

    public function cadastroAdmin()
    {
        View::render('admin/cadastro_adm');
    }
}