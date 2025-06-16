<?php

namespace App\Controllers\Admin;

use Core\View;
use App\Controllers\Controller;

class CadastroAdminController extends Controller
{

    public function cadastroAdmin()
    {
        View::render('admin/cadastro_adm');
    }
}