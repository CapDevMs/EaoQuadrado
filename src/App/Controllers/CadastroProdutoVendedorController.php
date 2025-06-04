<?php

namespace App\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Core\View;

class CadastrarProdutoVendedorController extends Controller
{

    public function cadastrarProduto()
    {
        View::render('vendedor/cadastrar_produto_vendedor');
    }

    // Exibe formulário
    public function criar()
    {
        $categorias = Categoria::getCategorias();
        View::render('produto/form', compact('categorias'));
    }

    // Salva produto
   public function salvar()
    {
    $dados = $_POST;
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

    $dados['imagens'] = json_encode($imagens); // Se a coluna for JSON/text

    $produto = new Produto();

    try {
        $produto->insert($dados);
        View::render('produto/sucesso', ['mensagem' => 'Produto cadastrado com sucesso!']);
    } catch (\Exception $e) {
        View::render('produto/form', [
            'erros' => ['Erro ao salvar produto: ' . $e->getMessage()],
            'categorias' => $categorias
        ]);
    }
    }


   public function atualizar($id)
    {
    $dados = $_POST;
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
        $produto->update($id, $dados);
        View::render('produto/sucesso', ['mensagem' => 'Produto atualizado com sucesso!']);
    } catch (\Exception $e) {
        View::render('produto/form', [
            'erros' => ['Erro ao atualizar produto: ' . $e->getMessage()],
            'categorias' => $categorias,
            'dados' => $dados
        ]);
    }
    }

    public function deletar($id)
    {
        $produto = new Produto();
        $produto->delete($id);
        header('Location: /produtos');
        exit;
    }
}