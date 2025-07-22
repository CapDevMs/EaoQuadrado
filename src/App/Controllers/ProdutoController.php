<?php

namespace App\Controllers;

use App\Models\Produto;
use Core\View;

class ProdutoController extends Controller
{
    public function produto()
{

        View::render("produto");
    }
 
    public function exibirProduto()
    
    {
        $idProduto = $_GET['id'] ?? null;

        if (!$idProduto) {
            echo "Produto não encontrado.";
            return;
        }

        $produtoModel = new ProdutoModel();
        $produto = $produtoModel->getProdutoPorId($idProduto);

        if (!$produto) {
            echo "Produto não encontrado.";
            return;
        }

        $this->loadView('produto/produto', ['produto' => $produto]);
    }

}