<?php

namespace App\Controllers;

use App\Models\Produto;
use Core\View;

class ProdutoController extends Controller
{
    public function produto()
{

        View::render("produto", compact( 'todosProdutos'));
    }   
}