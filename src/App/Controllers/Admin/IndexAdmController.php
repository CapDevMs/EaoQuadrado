<?php

namespace App\Controllers\Admin;

use Core\View;
use App\Controllers\Controller;

class IndexAdmController extends Controller
{

    public function indexAdm()
    {
        View::render('admin/index_adm');
    }
}