<?php

namespace App\Controllers;

use Core\View;
use App\Models\Produto;

class CadastrarProdutoVendedorController extends Controller
{
    public function cadastrarProduto()
    {
        // Exibe a página
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            View::render('vendedor/cadastrar_produto_vendedor');
            return;
        }

        // Processa o envio do formulário
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $produtoModel = new Produto();

            // Tratamento dos dados do formulário
            $dados = [
                'nome' => $_POST['nome'] ?? '',
                'marca' => $_POST['marca'] ?? '',
                'modelo' => $_POST['modelo'] ?? '',
                'id_categoria' => $_POST['id_categoria'] ?? null,
                'preco' => $_POST['preco'] ?? '',
                'quantidade' => $_POST['quantidade'] ?? 0,
                'descricao' => $_POST['descricao'] ?? '',
                'link' => $_POST['link'] ?? '',
                'imagens' => '', // será atualizado abaixo após upload
            ];

            // Tratamento de imagem
            $imagens = [];
            if (!empty($_FILES['imagens']['name'][0])) {
                $uploadDir = 'uploads/produtos/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                foreach ($_FILES['imagens']['name'] as $index => $nomeImagem) {
                    $tmpName = $_FILES['imagens']['tmp_name'][$index];
                    $extensao = pathinfo($nomeImagem, PATHINFO_EXTENSION);
                    $nomeFinal = uniqid('img_', true) . '.' . $extensao;
                    $caminhoCompleto = $uploadDir . $nomeFinal;

                    if (move_uploaded_file($tmpName, $caminhoCompleto)) {
                        $imagens[] = $caminhoCompleto;
                    }
                }

                // Armazena como JSON no banco
                $dados['imagens'] = json_encode($imagens);
            }

            // Insere no banco
            $produtoModel->insert($dados);

            header("Location: /cadastrar-produto-vendedor?sucesso=1");
            exit;
        }
    }
}
