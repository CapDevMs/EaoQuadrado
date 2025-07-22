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
 
    public function getProduto()
{
    $idProduto = $_GET['id'] ?? null;

    if (!$idProduto) {
        echo json_encode(['erro' => 'Produto não encontrado']);
        return;
    }

    $produtoModel = new ProdutoModel();
    $produto = $produtoModel->getProdutoPorId($idProduto);

    if (!$produto) {
        echo json_encode(['erro' => 'Produto não encontrado']);
        return;
    }

    header('Content-Type: application/json');
    echo json_encode($produto);
}

}