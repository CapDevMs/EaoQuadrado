<?php

namespace App\Controllers;

use Core\View;

class contasInativasController extends Controller
{

    public function contasInativas()
    {
        View::render('admin/contas_inativas');
    }
}