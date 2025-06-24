<?php

namespace App\Controllers\Cliente;

use App\Models\Cliente;
use App\Models\User;
use Core\View;
use App\Controllers\Controller;
// use App\Services\Upload;

class CadastroClienteController extends Controller
{

  public function index()
  {
    View::render('cadastros/cadastro_cliente');
  }

  public function cadastrarCliente()
  {
    $dados = [
      'nome' => htmlspecialchars($_POST['nome']),
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

    // $nomeImagemSalva = null;
    // $uploadDir = __DIR__ . '../../../public/assets/uploads/';
    // $_FILES['imgProfile']['name'] = 'foto_cliente.png';
    // $_FILES['imgProfile']['full_path'] = 'foto_cliente.png';
    // var_dump($_FILES['imgProfile']);
    
    // if (isset($_POST['registrar']) && !empty($_FILES['imgProfile'])) {
    //   echo 'a';
    //   $uploader = new Upload();
    //   $uploadResult = $uploader->uploadImagem($_FILES['imgProfile'], $uploadDir);
    //   var_dump($uploadResult);
    //   if (!$uploadResult['success']) {
    //       $erros = array_merge($erros, $uploadResult['errors']);
    //   } else {
    //       $nomeImagemSalva = $uploadResult['fileName'];
    //   }
    // }

    // var_dump($nomeImagemSalva);

    // $dados['imagem'] = $nomeImagemSalva;

    $errosValidacao = $this->validarDados($dados);
    $erros = array_merge($erros, $errosValidacao);

    // if (!empty($erros)) {
    //   return View::render('cadastros/cadastro_cliente', [
    //     'erros' => $erros,
    //     'dados' => $dados
    //   ]);
    // }

    try {
      $user = new User();
      $idUsuario = $user->cadastroUsuarios(
        $dados['nome'] . ' ' . $dados['sobrenome'],
        $dados['email'],
        $dados['senha']
      );

      var_dump($idUsuario);

      // if (!$idUsuario) {
      //   throw new \Exception('Falha ao criar usuário');
      // }

      $cliente = new Cliente();
      $novoClienteCadastrado = [
        // 'imagem' => $nomeImagemSalva,
        'nome' => $dados['nome'],
        'sobrenome' => $dados['sobrenome'],
        'nascimento' => $dados['nascimento'],
        'cpf' => $dados['cpf'],
        'email' => $dados['email'],
        'numero_telefone' => $dados['telefone'],
        'senha' => $dados['senha']
      ];

      var_dump($novoClienteCadastrado);

      $cliente->insert($novoClienteCadastrado);

      // if (!$sucesso) {
      //   $user->delete($idUsuario);
      //   throw new \Exception('Falha ao criar cliente');
      // }

    //   return View::render('cadastros/cadastro_cliente', [
    //     'sucesso' => 'Cadastro realizado com sucesso!'
    //   ]);

    } catch (\PDOException $e) {
      $erros = ['Erro no banco de dados. Por favor, tente novamente.'];
    } catch (\Exception $e) {
      $erros = [$e->getMessage()];
    }

    // return View::render('cadastro/cadastro_cliente', [
    //   'erros' => $erros,
    //   'dados' => $dados
    // ]);
  }

  private function validarDados($dados)
  {
    $erros = [];
    $cliente = new Cliente();

    if (strlen($dados['nome']) < 2) {
      $erros[] = 'Nome deve ter pelo menos 2 caracteres.';
    }

    if (strlen($dados['sobrenome']) < 2) {
      $erros[] = 'Sobrenome deve ter pelo menos 2 caracteres.';
    }

    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
      $erros[] = 'E-mail inválido.';
    }

    if ($cliente->findBy('email', $dados['email'])->getData()) {
      $erros[] = 'Este email já está cadastrado.';
    }

    if (strlen($dados['senha']) < 6) {
      $erros[] = 'Senha deve ter no mínimo 6 caracteres';
    } elseif ($dados['senha'] !== $dados['confirmar_senha']) {
      $erros[] = 'As senhas não coincidem.';
    }

    if (strlen((string) $dados['cpf']) !== 11) {
      $erros[] = 'CPF inválido (deve conter 11 dígitos).';
    }

    $telLength = strlen((string) $dados['telefone']);
    if ($telLength < 10 || $telLength > 11) {
      $erros[] = 'Telefone inválido.';
    }

    if (strlen((string) $dados['cep']) !== 8) {
      $erros[] = 'CEP inválido.';
    }

    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dados['nascimento'])) {
      $erros[] = 'Data de nascimento inválida.';
    }

    return $erros;
  }
}