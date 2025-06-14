<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;
use App\Models\Produto;

class CadastroProdutoVendedorController extends Controller
{
    public function cadastrarProduto()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            return View::render('vendedor/cadastrar_produto_vendedor');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = $this->extrairDadosFormulario();
            $erros = $this->validarDados($dados);
            $imagens = $this->processarImagens($erros);

            if (!empty($erros)) {
                return View::render('vendedor/cadastrar_produto_vendedor', [
                    'erros' => $erros,
                    'dados' => $dados
                ]);
            }

            $dados['imagens'] = !empty($imagens) ? json_encode($imagens) : '';

            try {
                $produtoModel = new Produto();
                $produtoModel->insert($dados);
                header("Location: /cadastrar-produto-vendedor?sucesso=1");
                exit;
            } catch (\Exception $e) {
                $erros[] = "Erro ao salvar o produto. Tente novamente.";
                View::render('vendedor/cadastrar_produto_vendedor', [
                    'erros' => $erros,
                    'dados' => $dados
                ]);
            }
        }
    }

    private function extrairDadosFormulario(): array
    {
        return [
            'nome' => trim($_POST['nome'] ?? ''),
            'marca' => trim($_POST['marca'] ?? ''),
            'modelo' => trim($_POST['modelo'] ?? ''),
            'id_categoria' => filter_var($_POST['id_categoria'] ?? null, FILTER_VALIDATE_INT),
            'preco' => filter_var($_POST['preco'] ?? '', FILTER_VALIDATE_FLOAT),
            'quantidade' => filter_var($_POST['quantidade'] ?? 0, FILTER_VALIDATE_INT),
            'descricao' => trim($_POST['descricao'] ?? ''),
            'link' => trim($_POST['link'] ?? ''),
        ];
    }

    private function validarDados(array $dados): array
    {
        $erros = [];

        if ($dados['nome'] === '') $erros[] = "O nome do produto é obrigatório.";
        if ($dados['marca'] === '') $erros[] = "A marca do produto é obrigatória.";
        if ($dados['modelo'] === '') $erros[] = "O modelo do produto é obrigatório.";
        if (!$dados['id_categoria']) $erros[] = "A categoria selecionada é inválida.";
        if ($dados['preco'] === false || $dados['preco'] <= 0) $erros[] = "Informe um preço válido.";
        if ($dados['quantidade'] === false || $dados['quantidade'] < 0) $erros[] = "Quantidade inválida.";
        if ($dados['descricao'] === '') $erros[] = "A descrição do produto é obrigatória.";
        if ($dados['link'] && !filter_var($dados['link'], FILTER_VALIDATE_URL)) {
            $erros[] = "O link informado é inválido.";
        }

        return $erros;
    }

    private function processarImagens(array &$erros): array
    {
        $imagens = [];

        if (!empty($_FILES['imagens']['name'][0])) {
            $permitidosMime = ['image/jpeg', 'image/png', 'image/webp'];
            $permitidasExt = ['jpg', 'jpeg', 'png', 'webp'];
            $uploadDir = 'uploads/produtos/';

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            foreach ($_FILES['imagens']['name'] as $index => $nomeImagem) {
                $tmpName = $_FILES['imagens']['tmp_name'][$index];
                $tipo = mime_content_type($tmpName);
                $extensao = strtolower(pathinfo($nomeImagem, PATHINFO_EXTENSION));
                $tamanho = $_FILES['imagens']['size'][$index];

                if (!in_array($tipo, $permitidosMime) || !in_array($extensao, $permitidasExt)) {
                    $erros[] = "O arquivo '$nomeImagem' não é uma imagem válida.";
                    continue;
                }

                if ($tamanho > 2 * 1024 * 1024) {
                    $erros[] = "O arquivo '$nomeImagem' excede o limite de 2MB.";
                    continue;
                }

                $nomeFinal = uniqid('img_', true) . '.' . $extensao;
                $caminhoCompleto = $uploadDir . $nomeFinal;

                if (move_uploaded_file($tmpName, $caminhoCompleto)) {
                    $imagens[] = $caminhoCompleto;
                } else {
                    $erros[] = "Falha ao fazer upload da imagem '$nomeImagem'.";
                }
            }
        }

        return $imagens;
    }
}
