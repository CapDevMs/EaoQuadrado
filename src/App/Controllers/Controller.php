<?php

namespace App\Controllers;

use Core\View;

class Controller
{
    public static function errorPage()
    {
        http_response_code(404);
        View::render('404');
    }
}
