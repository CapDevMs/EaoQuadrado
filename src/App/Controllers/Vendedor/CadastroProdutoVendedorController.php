<?php
namespace App\Controllers\Vendedor;

use Core\View; 
use App\Controllers\Controller;
use App\Models\Produto;
use App\Models\Categoria; 

class CadastroProdutoVendedorController extends Controller
{

    public function index()
    {
        // tirar validação de método get futuramente 
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $categorias = (new Categoria())->findAll()->getData();

            return View::render('vendedor/cadastrar_produto_vendedor', [ 
                'categorias' => $categorias,
                'sucesso' => isset($_GET['sucesso']) && $_GET['sucesso'] == 1 // Mostra mensagem de sucesso se houver
            ]);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->processarCadastro(); 
        }
        // --- verificar se necessário ---
        // Caso outro método HTTP (PUT, DELETE...) retorne erro
        http_response_code(405); // Método não permitido
        echo "Método não permitido.";
    }

    private function processarCadastro()
    {
        $dados = [
            'nome' => trim($_POST['nome'] ?? ''),
            'marca' => trim($_POST['marca'] ?? ''),
            'modelo' => trim($_POST['modelo'] ?? ''),
            'id_categoria' => filter_var($_POST['id_categoria'] ?? null, FILTER_VALIDATE_INT),
            'preco' => filter_var(str_replace(',', '.', $_POST['preco'] ?? ''), FILTER_VALIDATE_FLOAT),
            'quantidade' => filter_var($_POST['quantidade'] ?? 0, FILTER_VALIDATE_INT),
            'descricao' => trim($_POST['descricao'] ?? ''),
        ];

        $erros = $this->validarDados($dados);
        $imagens = $this->processarImagens($erros);
        $categorias = (new Categoria())->findAll()->getData();

        if (!empty($erros)) {
            return View::render('vendedor/cadastrar_produto_vendedor', [
                'erros' => $erros,
                'dados' => $dados,
                'categorias' => $categorias
            ]);
        }

        if (!empty($imagens)) {
            $dados['imagens'] = $imagens[0]; // Aqui define a imagem principal que será salva no banco
        }

        try {
            $produto = new Produto();
            $produto->insert($dados);

            header("Location: " . get_base_url() . "vendedor/cadastroProduto?sucesso=1");
            exit;
        } catch (\Exception $e) {
            $erros[] = "Erro ao salvar no banco: " . $e->getMessage();
            return View::render('vendedor/cadastrar_produto_vendedor', [
                'erros' => $erros,
                'dados' => $dados,
                'categorias' => $categorias
            ]);
        }
    }


    // Validações dos campos do formulário
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

        return $erros;
    }

    // Upload e validação de imagens
   private function processarImagens(array &$erros): array
    {
        $imagens = [];

        if (!empty($_FILES['imagens']['name'][0])) {
            $permitidosMime = ['image/jpeg', 'image/png', 'image/webp'];
            $permitidasExt = ['jpg', 'jpeg', 'png', 'webp'];
            $uploadDir = 'src/public/assets/img/';

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

                $nomeFinal = uniqid('caneca_', true) . '.' . $extensao;
                $caminhoCompleto = $uploadDir . $nomeFinal;

                if (move_uploaded_file($tmpName, $caminhoCompleto)) {
                    $imagens[] = $caminhoCompleto; // Ex: src/public/assets/img/caneca_123abc.png
                } else {
                    $erros[] = "Falha ao fazer upload da imagem '$nomeImagem'.";
                }
            }
        }

        return $imagens;
    }

}