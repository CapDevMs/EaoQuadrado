<?php

namespace App\Controllers;

use Core\View;

class FaqController extends Controller
{

    public function faq()
    {
        View::render('cadastros/faq');
    }
}