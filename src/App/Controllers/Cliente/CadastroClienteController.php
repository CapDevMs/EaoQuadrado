<?php

namespace App\Controllers\Cliente;

use App\Models\Cliente;
use App\Models\User;
use App\Models\Endereco;
use Core\View;
use App\Controllers\Controller;
use App\Services\Upload;

class CadastroClienteController extends Controller
{

  public function index()
  {
    View::render('cadastros/cadastro_cliente');
  }

  public function cadastrarCliente()
  {
    $dados = [
      "imagem" => $_FILES['imgProfile'] ?? null,
      "nome" => htmlspecialchars($_POST['nome']),
      "sobrenome" => htmlspecialchars($_POST['sobrenome']),
      "nascimento" => (int) $_POST['nascimento'],
      "cpf" => (int) $_POST['cpf'],
      "email" => $_POST['email'],
      "telefone" => (int) $_POST['telefone'],
      "cep" => (int) $_POST['cep'],
      "endereco" => htmlspecialchars($_POST['endereco']),
      "bairro" => htmlspecialchars($_POST['bairro']),
      "complemento" => htmlspecialchars($_POST['complemento']),
      "senha" => $_POST['senha'],
      "confirmarSenha" => $_POST['confirmarSenha']
    ];

    
    $erros = [];
    $nomeImagemSalva = null;
    $publicUploadDir = 'assets/uploads/';
    $uploadDir = __DIR__ . '/../../../public/' . $publicUploadDir;

    if (isset($_POST['registrar']) && !empty($_FILES['imgProfile'])) {
      $uploader = new Upload();
      $uploadResultado = $uploader->uploadImagem($dados['imagem'], $uploadDir);
      if (!$uploadResultado['success']) {
        $erros = array_merge($erros, $uploadResultado['errors']);
      } else {
        $nomeImagemSalva = $publicUploadDir . $uploadResultado['fileName'];
    }
  }

    $dados['imagem'] = $nomeImagemSalva;

    $errosValidacao = $this->validarDados($dados);
    var_dump($errosValidacao);
    $erros = array_merge($erros, $errosValidacao);

    if (!empty($erros)) {
      return View::render('cadastros/cadastro_cliente', [
        'erros' => $erros,
        'dados' => $dados
      ]);
    }

    try {
      $user = new User();
      $idUsuario = $user->cadastroUsuarios(
        $dados['nome'] . ' ' . $dados['sobrenome'],
        $dados['email'],
        $dados['senha']
      );

      if (!$idUsuario) {
        throw new \Exception('Falha ao criar usuário');
      }

      $cliente = new Cliente();
      $novoClienteCadastrado = $cliente->cadastroCliente(
        $idUsuario,
        $dados['imagem'],
        $dados['nome'],
        $dados['sobrenome'],
        $dados['nascimento'],
        $dados['cpf'],
        $dados['email'],
        $dados['telefone'],
        $dados['senha']
      );

      var_dump($novoClienteCadastrado);
      

      $endereco = new Endereco();
      $idEndereco = $endereco->cadastroEndereco(
        $dados['cep'],
        $dados['endereco'],
        $dados['bairro'],
        $dados['complemento'],
      );

      var_dump($idEndereco);
      if (!$idEndereco) {
        throw new \Exception('Falha ao criar usuário');
      }

      if (!$novoClienteCadastrado) {
        $user->delete($idUsuario);
        $endereco->delete($idEndereco);
        throw new \Exception('Falha ao criar cliente.');
      }

      return View::render('cadastros/cadastro_cliente', [
        'sucesso' => 'Cadastro realizado com sucesso!'
      ]);

    } catch (\PDOException $e) {
      $erros = ['Erro no banco de dados. Por favor, tente novamente.'];
    } catch (\Exception $e) {
      $erros = [$e->getMessage()];
    }

    return View::render('cadastro/cadastro_cliente', [
      'erros' => $erros,
      'dados' => $dados
    ]);
  }
  private function validarDados($dados)
  {
    $erros = [];
    $cliente = new Cliente();
    $user = new User();

    if (strlen($dados['nome']) < 2) {
      $erros[] = 'Nome deve ter pelo menos 2 caracteres.';
    }

    if (strlen($dados['sobrenome']) < 2) {
      $erros[] = 'Sobrenome deve ter pelo menos 2 caracteres.';
    }

    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
      $erros[] = 'E-mail inválido.';
    }

    if ($user->findBy('email', $dados['email'])->getData()) {
      $erros[] = 'Este email já está cadastrado.';
    }

    if ($cliente->findBy('email', $dados['email'])->getData()) {
      $erros[] = 'Este email já está cadastrado.';
    }

    if (strlen($dados['senha']) < 6) {
      $erros[] = 'Senha deve ter no mínimo 6 caracteres';
    } elseif ($dados['senha'] !== $dados['confirmarSenha']) {
      $erros[] = 'As senhas não coincidem.';
    }

    if (strlen((string) $dados['cpf']) !== 11 || !is_numeric($dados['cpf'])) {
      $erros[] = 'CPF inválido (deve conter 11 dígitos).';
    }

    $telefone = preg_replace('/\D/', '', $dados['telefone']); // remove tudo que não é número

    if (!preg_match('/^[1-9]{2}(9\d{8}|\d{8})$/', $telefone)) {
        $erros[] = 'Telefone inválido.';
    }

    if (strlen((string) $dados['cep']) !== 8) {
      $erros[] = 'CEP inválido.';
    }

    return $erros;
  }
}