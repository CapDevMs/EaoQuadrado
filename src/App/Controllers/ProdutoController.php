<?php

namespace App\Controllers;

use App\Models\Produto;
use Core\View;

class ProdutoController extends Controller
{
    public function produto()
{

    //    $todosProdutos = new Produto();

    //    $todosProdutos->findAll();

    //     $todosProdutos = $todosProdutos->getData();

    //     View::render("produto", compact( 'todosProdutos'));
        View::render('produto');
    }   
}