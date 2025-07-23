<?php

namespace App\Controllers;

use Core\Request;
use Core\View;

class Controller
{
    public $request;

    public function __construct() {
        $request = new Request();
        $this->request = $request;
    }

    public static function errorPage()
    {
        http_response_code(404);
        View::render('404');
    }

}
