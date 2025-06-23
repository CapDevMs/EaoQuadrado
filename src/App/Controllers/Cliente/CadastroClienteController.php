<?php

namespace App\Controllers\Cliente;

use App\Models\Cliente;
use App\Models\User;
use Core\View;
use App\Controllers\Controller;


class CadastroClienteController extends Controller
{

  public function index()
  {
    View::render('cadastros/cadastro_cliente');
  }

  public function cadastrarCliente()
  {
    $dados = [
      $imagem = $_POST['imgProfile'],
      $nome = htmlspecialchars($_POST['nome']),
      $sobrenome = htmlspecialchars($_POST['sobrenome']),
      $nascimento = (int) $_POST['nascimento'],
      $cpf = (int) $_POST['cpf'],
      $email = $_POST['email'],
      $telefone = (int) $_POST['telefone'],
      $cep = (int) $_POST['cep'],
      $endereco = htmlspecialchars($_POST['endereco']),
      $bairro = htmlspecialchars($_POST['bairro']),
      $complemento = htmlspecialchars($_POST['complemento']),
      $senha = $_POST['senha'],
      $confirmarSenha = $_POST['confirmarSenha']
    ];

    $erros = $this->validarDados($dados);

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
        $senha
      );

      if (!$idUsuario) {
        throw new \Exception('Falha ao criar usuário');
      }

      $cliente = new Cliente();
      $novoClienteCadastrado = [
        'imagem' => $imagem,
          'nome' => $nome,
          'sobrenome' => $sobrenome,
          'nascimento' => $nascimento,
          'cpf' => $cpf,
          'email' => $email,
          'telefone' => $telefone,
          'cep' => $cep,
          'endereco' => $endereco,
          'bairro' => $bairro,
          'complemento' => $complemento,
          'senha' => $senha,
          'confirmarSenha' => $confirmarSenha
      ];

      $sucesso = $cliente->insert($novoClienteCadastrado);

      if (!$sucesso) {
        $user->delete($idUsuario);
        throw new \Exception('Falha ao criar cliente');
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