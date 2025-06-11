<?php

namespace App\Controllers\Admin;

use Core\View;
use App\Controllers\Controller;

class MeuPerfilAdmController extends Controller
{

    public function perfilAdm()
    {
        View::render('admin.meu_perfil_adm');
    }
}