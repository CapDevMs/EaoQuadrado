<?php

namespace App\Controllers;

use Core\View;

class faqController extends Controller
{

    public function faq()
    {
        View::render('cadastros/faq');
    }
}