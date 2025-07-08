<?php

namespace App\Controllers;

use Core\View;

class HomeController extends Controller
{

    public function index()
    {
        View::render('homepage');
    }

    public function sobre() {
        View::render('sobre');
    }

    public function nossaPolitica(){
        View::render('nossa_politica');
    }

    public function faq()
    {
        View::render('faq');

    }

    public function termosDeUso()
    {
        View::render('/termos_de_uso');

    }
}