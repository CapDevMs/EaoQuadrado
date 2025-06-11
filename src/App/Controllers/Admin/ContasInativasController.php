<?php

namespace App\Controllers\Admin;

use Core\View;
use App\Controllers\Controller;

class ContasInativasController extends Controller
{

    public function contasInativas()
    {
        View::render('admin/contas_inativas');
    }
}