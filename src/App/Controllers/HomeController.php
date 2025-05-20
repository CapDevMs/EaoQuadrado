<?php

namespace App\Controllers;

use Core\View;

class HomeController extends Controller
{

    public function index()
    {
        return View::render('homepage');
    }

    public function sobre()
    {
        return View::render('sobre');
    }

    public function nossaPolitica()
    {
        return View::render('nossa_politica');
    }

    public function contato()
    {
        return View::render('contato');
    }

    public function enviarContato()
    {
        mail('admin@admin.com', 'Contato', 'Teste');

        return route('/contato');

    }
}