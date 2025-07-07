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
        //tirar validação de método get futuramente 
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
        // Extrai os dados enviados pelo formulário (já com limpeza e validações básicas)
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

        // Busca categorias para renderizar o formulário novamente em caso de erro
        $categorias = (new Categoria())->findAll()->getData();

        // Se houver qualquer erro, volta a exibir o formulário com os dados preenchidos e erros
        if (!empty($erros)) {
            return View::render('vendedor/cadastrar_produto_vendedor', [
                'erros' => $erros,
                'dados' => $dados,
                'categorias' => $categorias
            ]);
        }

        $dados['imagens'] = json_encode($imagens);

        // salva o produto no banco de dados
        try {
            $produto = new Produto(); // Instancia o model
            $produto->insert($dados); // Salva no banco

            // Redireciona com sucesso se salvar corretamente
            header("Location: " . get_base_url() . "vendedor/cadastrarProduto?sucesso=1");
            exit;

        } catch (\Exception $e) {
            // Caso ocorra erro no inserimento, exibe mensagem de erro na tela
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

        // Verifica se alguma imagem foi enviada
        if (!empty($_FILES['imagens']['name'][0])) {
            $permitidosMime = ['image/jpeg', 'image/png', 'image/webp']; // Tipos permitidos
            $permitidasExt = ['jpg', 'jpeg', 'png', 'webp']; // Extensões permitidas
            $uploadDir = 'uploads/produtos/'; // Pasta de destino

            // Cria a pasta se não existir
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Percorre cada imagem enviada
            foreach ($_FILES['imagens']['name'] as $index => $nomeImagem) {
                $tmpName = $_FILES['imagens']['tmp_name'][$index]; // Arquivo temporário
                $tipo = mime_content_type($tmpName); 
                $extensao = strtolower(pathinfo($nomeImagem, PATHINFO_EXTENSION)); 
                $tamanho = $_FILES['imagens']['size'][$index]; // Tamanho em bytes

                // Validação do tipo e extensão
                if (!in_array($tipo, $permitidosMime) || !in_array($extensao, $permitidasExt)) {
                    $erros[] = "O arquivo '$nomeImagem' não é uma imagem válida.";
                    continue;
                }

                // Validação do tamanho (limite de 2MB)
                if ($tamanho > 2 * 1024 * 1024) {
                    $erros[] = "O arquivo '$nomeImagem' excede o limite de 2MB.";
                    continue;
                }

                // Gera nome único para o arquivo
                $nomeFinal = uniqid('img_', true) . '.' . $extensao;
                $caminhoCompleto = $uploadDir . $nomeFinal;

                // Move o arquivo para o destino final
                if (move_uploaded_file($tmpName, $caminhoCompleto)) {
                    $imagens[] = $caminhoCompleto; // Adiciona no array de imagens
                } else {
                    $erros[] = "Falha ao fazer upload da imagem '$nomeImagem'.";
                }
            }
        }

        return $imagens; 
    }
}

