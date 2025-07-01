<?php

namespace App\Controllers;

use App\Models\Produto;
use Core\View;

class ProdutoController extends Controller
{
    public function show(int $id)
    {
        $produtoModel = new Produto();

        // 1. Buscar o produto principal
        $produto = $produtoModel->findProductDetailsById($id);

        if (!$produto) {
            echo "Produto não encontrado!";
            exit;
        }

        // 2. Buscar as imagens da galeria
        $imagens = $produtoModel->findImagesById($id);

        // 3. Buscar produtos recomendados
        $recomendados = $produtoModel->findRecomendados($id, 4);

        // 4. Montar um array com TODOS os dados para a view
        // Em ProdutoController.php
        $dadosParaView = [
            'produto' => [
                'nomeProduto'  => $produto['nome'] ?? 'Produto sem nome',
                'precoProduto' => number_format($produto['preco'] ?? 0, 2, ',', '.'),
                'descricao'    => $produto['descricao'] ?? '',
                'nomeLoja'     => $produto['nomeLoja'] ?? 'Loja não informada',
                'nomeCategoria'=> $produto['nomeCategoria'] ?? 'Sem categoria' // Exemplo de uso
            ],
            'imagens'      => $imagens,
            'recomendados' => $recomendados
        ];

        // 5. Enviar o array completo para a view
        View::render('produto', $dadosParaView);
    }   
}