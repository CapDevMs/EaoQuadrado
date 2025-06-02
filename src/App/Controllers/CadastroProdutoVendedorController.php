<?php

namespace App\Controllers;

use Core\View;
use App\Models\Produto;
use App\Models\Categoria;

class CadastroProdutoVendedorController extends Controller
{
    public function cadastrarProduto()
    {   
        
        echo("Oi");
        // var_dump($categoriaModel);
        // $categorias = $categoriaModel->getCategorias();
        // var_dump($categorias);
        View::render('vendedor/cadastrar_produto_vendedor', ['categorias' => $categorias]);
    }

    public function salvarProduto() 
    {
        $dados = $_POST;
        $erros = [];
    
        // Validações básicas
        if (empty($dados['nome'])) {
            $erros[] = 'O nome do produto é obrigatório.';
        }
    
        if (!is_numeric($dados['preco']) || $dados['preco'] <= 0) {
            $erros[] = 'O preço deve ser um número positivo.';
        }
    
        $categorias = Categoria::getCategorias();
    
        if (!empty($erros)) {
            View::render('vendedor/cadastrar_produto_vendedor', [
                'erros' => $erros,
                'dados' => $dados,
                'categorias' => $categorias
            ]);
            return;
        }
    
        // TRATAR IMAGENS ENVIADAS
        $imagens = [];
        foreach ($_FILES['arquivo']['tmp_name'] as $key => $tmp_name) {
            $nome_arquivo = $_FILES['arquivo']['name'][$key];
            $caminho_final = 'uploads/' . uniqid() . '_' . $nome_arquivo;
    
            if (move_uploaded_file($tmp_name, $caminho_final)) {
                $imagens[] = $caminho_final;
            }
        }
    
        // Adiciona as imagens ao array de dados
        $dados['imagens'] = $imagens;
    
        // Cadastra no banco
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