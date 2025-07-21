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
        if (!isset($_GET['id'])) {
            http_response_code(400);
            echo json_encode(['erro' => 'ID do produto não informado']);
            return;
        }

        $produtoModel = new Produto();
        $produto = $produtoModel->getProdutoById($_GET['id']);

        if (!$produto) {
            http_response_code(404);
            echo json_encode(['erro' => 'Produto não encontrado']);
            return;
        }

        echo json_encode($produto);
    }

}