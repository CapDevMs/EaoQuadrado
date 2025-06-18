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

  public function cadastrarCliente() {
    $cliente = new Cliente();

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

    $erros = [];

    if (strlen($dados['nome']) < 2) {
      $erros[] = 'Nome deve ter pelo menos 2 caracteres';
    }
    
    
    if (strlen($dados['sobrenome']) < 2) {
        $erros[] = 'Sobrenome deve ter pelo menos 2 caracteres';
    }
    
    
    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros[] = 'E-mail inválido';
    }
    
    if (strlen($dados['senha']) < 6) {
        $erros[] = 'Senha deve ter no mínimo 6 caracteres';
    } elseif ($dados['senha'] !== $dados['confirmar_senha']) {
        $erros[] = 'As senhas não coincidem';
    }
    
    
    if (strlen((string)$dados['cpf']) !== 11) {
        $erros[] = 'CPF inválido (deve conter 11 dígitos)';
    }
    
  
    $telLength = strlen((string)$dados['telefone']);
    if ($telLength < 10 || $telLength > 11) {
        $erros[] = 'Telefone inválido';
    }
    
    if (strlen((string)$dados['cep']) !== 8) {
        $erros[] = 'CEP inválido';
    }
    
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dados['nascimento'])) {
        $erros[] = 'Data de nascimento inválida';
    }
    
    // $this->db->beginTransaction();
      // $stmt = $this->db->prepare($sql);
      // $stmt->execute($params);
    // return $this->db->lastInsertId();

    $modelUser = new User();

    $novoId = $modelUser->cadastroUsuarios();

    if (!$novoId) {
      $erros[] = 'Erro na inserção na tabela usuarios';
    } else {
      $sucesso = $modelUser->CadastroCliente($novoId);
      if (!$sucesso) {
        $erros[] = 'Erro na inserção na tabela Cliente';
      } else {
        continue
      };
    };

    if (!empty($erros)){
        return View::render('cadastro/cadastro_cliente', [
            'erros' => $erros
        ]);
    }

    $cliente->insert([
        'nome' => $nome,
        'sobrenome' => $sobrenome
    ]);

    return  View::render('cadastro/cadastro_cliente', [
        'sucesso' => 'Cadastro realizado com sucesso.'
    ]);
  }


}