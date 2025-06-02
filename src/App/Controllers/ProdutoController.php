<?php

namespace App\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Core\View;

class ProdutoController extends Controller
{
    // Lista todos os produtos
    public function index()
    {
        $produto = new Produto();
        $produtos = $produto->findAll()->getData();

        View::render("produto/index", compact('produtos'));
    }

    // Exibe formulário de criação
    public function criar()
    {
        $categorias = Categoria::getCategorias();
        View::render('produto/form', compact('categorias'));
    }

    // Salva produto novo (CREATE)
    public function salvar()
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
            View::render('produto/form', [
                'erros' => $erros,
                'dados' => $dados,
                'categorias' => $categorias
            ]);
            return;
        }

        // Tratamento das imagens
        $imagens = [];
        if (isset($_FILES['arquivo'])) {
            foreach ($_FILES['arquivo']['tmp_name'] as $key => $tmp_name) {
                $nome_arquivo = $_FILES['arquivo']['name'][$key];
                $caminho_final = 'uploads/' . uniqid() . '_' . $nome_arquivo;

                if (move_uploaded_file($tmp_name, $caminho_final)) {
                    $imagens[] = $caminho_final;
                }
            }
        }

        $dados['imagens'] = $imagens;

        // Cadastro
        $produto = new Produto();

        try {
            $produto->cadastrarProduto($dados);
            View::render('produto/sucesso', ['mensagem' => 'Produto cadastrado com sucesso!']);
        } catch (\Exception $e) {
            View::render('produto/form', [
                'erros' => ['Erro ao salvar produto: ' . $e->getMessage()],
                'categorias' => $categorias
            ]);
        }
    }

    // Exibe formulário de edição
    public function editar($id)
    {
        $produto = new Produto();
        $dados = $produto->findById($id)->getData();
        $categorias = Categoria::getCategorias();

        View::render('produto/form', compact('dados', 'categorias'));
    }

    // Atualiza produto existente
    public function atualizar($id)
    {
        $dados = $_POST;
        $dados['id'] = $id;

        $erros = [];

        if (empty($dados['nome'])) {
            $erros[] = 'O nome do produto é obrigatório.';
        }

        if (!is_numeric($dados['preco']) || $dados['preco'] <= 0) {
            $erros[] = 'O preço deve ser um número positivo.';
        }

        $categorias = Categoria::getCategorias();

        if (!empty($erros)) {
            View::render('produto/form', [
                'erros' => $erros,
                'dados' => $dados,
                'categorias' => $categorias
            ]);
            return;
        }

        $produto = new Produto();

        try {
            $produto->atualizarProduto($dados);
            View::render('produto/sucesso', ['mensagem' => 'Produto atualizado com sucesso!']);
        } catch (\Exception $e) {
            View::render('produto/form', [
                'erros' => ['Erro ao atualizar produto: ' . $e->getMessage()],
                'categorias' => $categorias,
                'dados' => $dados
            ]);
        }
    }

    // Remove produto
    public function deletar($id)
    {
        $produto = new Produto();
        $produto->deletarProduto($id);
        header('Location: /produtos');
        exit;
    }
}
