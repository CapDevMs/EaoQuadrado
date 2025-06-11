<?php

namespace App\Controllers;

use Core\View;

class IndexAdmController extends Controller
{

    public function indexAdm()
    {
        View::render('admin/index_adm');
    }
}