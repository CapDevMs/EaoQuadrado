<?php

namespace App\Controllers;

use Core\View;

class HomeController extends Controller
{

    public function index()
    {
        View::render('homepage');
    }
}