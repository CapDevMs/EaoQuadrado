<?php

namespace App\Controllers\Admin;

use Core\View;
use App\Controllers\Controller;


class AberturaChamadosController extends Controller
{

    public function aberturaChamados()
    {
        View::render('admin/abertura-de-chamados');
    }
}