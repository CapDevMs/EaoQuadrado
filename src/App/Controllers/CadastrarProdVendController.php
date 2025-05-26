<?php

namespace App\Controllers;

use Core\View;
use App\Models\Produto;
use App\Models\Categoria;

class CadastrarProdVendController extends Controller
{
    public function cadastroProdutoVendedor()
    {
        $categoriaModel = new \App\Models\Categoria();
        $categorias = $categoriaModel->getCategorias();
        View::render('vendedor/cadastrar_produto_vendedor', ['categorias' => $categorias]);
    }

    public function salvarProduto() 
    {
        $dados = $_POST;
        $erros = [];

        if (empty($dados['nome'])) {
            $erros[] = 'O nome do produto é obrigatório.';
        }

        if (!is_numeric($dados['preco']) || $dados['preco'] <= 0) {
            $erros[] = 'O preço deve ser um número positivo.';
        }

        $categorias = Categoria::getCategorias(); // Para exibir novamente em caso de erro

        if (!empty($erros)) {
            View::render('vendedor/cadastrar_produto_vendedor', [
                'erros' => $erros,
                'dados' => $dados,
                'categorias' => $categorias
            ]);
            return;
        }

        $produtoModel = new Produto();

        try {
            $produtoModel->cadastrarProduto($dados);
            View::render('vendedor/sucesso', ['mensagem' => 'Produto cadastrado com sucesso!']);
        } catch (\Exception $e) {
            View::render('vendedor/cadastrar_produto_vendedor', [
                'erros' => ['Erro ao salvar produto: ' . $e->getMessage()],
                'categorias' => $categorias
            ]);
        }
    }
}
