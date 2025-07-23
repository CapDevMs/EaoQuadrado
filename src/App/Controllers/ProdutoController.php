<?php

namespace App\Controllers;

use App\Models\Produto;
use Core\View;

class ProdutoController extends Controller
{
    public function produto()
{
        $produtoModel = new Produto();
        $produtos = $produtoModel -> getProdutos();
        $lojas = $produtoModel -> getLojas();
        View::render("produto",['listaProdutos' => $produtos,'listaVendedores' => $lojas]);;
    }   
}