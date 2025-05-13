<?php

namespace App\Controllers;

use Core\View;

class meuPerfilAdmController extends Controller
{

    public function perfilAdm()
    {
        View::render('admin.meu_perfil_adm');
    }
}