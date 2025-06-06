<?php

namespace App\Controllers;

use Core\View;
use App\Models\Produto;

class CadastroProdutoVendedorController extends Controller
{
    public function cadastrarProduto()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            View::render('vendedor/cadastrar_produto_vendedor');
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $produtoModel = new Produto();

            // Tratamento e validação dos dados
            $nome = trim($_POST['nome'] ?? '');
            $marca = trim($_POST['marca'] ?? '');
            $modelo = trim($_POST['modelo'] ?? '');
            $id_categoria = filter_var($_POST['id_categoria'] ?? null, FILTER_VALIDATE_INT);
            $preco = filter_var($_POST['preco'] ?? '', FILTER_VALIDATE_FLOAT);
            $quantidade = filter_var($_POST['quantidade'] ?? 0, FILTER_VALIDATE_INT);
            $descricao = trim($_POST['descricao'] ?? '');
            $link = trim($_POST['link'] ?? '');

            $erros = [];

            // Validações de erros
            if ($nome === '') $erros[] = "O nome do produto é obrigatório.";
            if ($marca === '') $erros[] = "A marca do produto é obrigatória.";
            if ($modelo === '') $erros[] = "O modelo do produto é obrigatório.";
            if (!$id_categoria) $erros[] = "A categoria selecionada é inválida.";
            if ($preco === false || $preco <= 0) $erros[] = "Informe um preço válido.";
            if ($quantidade === false || $quantidade < 0) $erros[] = "Quantidade inválida.";
            if ($descricao === '') $erros[] = "A descrição do produto é obrigatória.";
            if ($link && !filter_var($link, FILTER_VALIDATE_URL)) $erros[] = "O link informado é inválido.";

            // Validação das imagens
            $imagens = [];
            if (!empty($_FILES['imagens']['name'][0])) {
                $permitidas = ['image/jpeg', 'image/png', 'image/webp'];
                $uploadDir = 'uploads/produtos/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                foreach ($_FILES['imagens']['name'] as $index => $nomeImagem) {
                    $tmpName = $_FILES['imagens']['tmp_name'][$index];
                    $tipo = mime_content_type($tmpName);
                    $tamanho = $_FILES['imagens']['size'][$index];

                    if (!in_array($tipo, $permitidas)) {
                        $erros[] = "O arquivo '$nomeImagem' não é uma imagem válida.";
                        continue;
                    }

                    if ($tamanho > 2 * 1024 * 1024) { // 2MB
                        $erros[] = "O arquivo '$nomeImagem' excede o limite de 2MB.";
                        continue;
                    }

                    $extensao = pathinfo($nomeImagem, PATHINFO_EXTENSION);
                    $nomeFinal = uniqid('img_', true) . '.' . $extensao;
                    $caminhoCompleto = $uploadDir . $nomeFinal;

                    if (move_uploaded_file($tmpName, $caminhoCompleto)) {
                        $imagens[] = $caminhoCompleto;
                    } else {
                        $erros[] = "Falha ao fazer upload da imagem '$nomeImagem'.";
                    }
                }
            }

            // Se houver erros, reexibe o formulário com mensagens
            if (!empty($erros)) {
                View::render('vendedor/cadastrar_produto_vendedor', [
                    'erros' => $erros,
                    'dados' => compact('nome', 'marca', 'modelo', 'id_categoria', 'preco', 'quantidade', 'descricao', 'link')
                ]);
                return;
            }

            // Monta o array final dos dados para o banco
            $dados = [
                'nome' => $nome,
                'marca' => $marca,
                'modelo' => $modelo,
                'id_categoria' => $id_categoria,
                'preco' => $preco,
                'quantidade' => $quantidade,
                'descricao' => $descricao,
                'link' => $link,
                'imagens' => !empty($imagens) ? json_encode($imagens) : '',
            ];

            // Insere no banco
            $produtoModel->insert($dados);

            // Redireciona com sucesso
            header("Location: /cadastrar-produto-vendedor?sucesso=1");
            exit;
        }
    }
}
