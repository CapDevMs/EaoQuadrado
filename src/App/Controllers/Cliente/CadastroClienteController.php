<?php

namespace App\Controllers\Cliente;

use App\Models\Cliente;
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

        $imagem = $_POST['imgProfile'];
        $nome = htmlspecialchars($_POST['nome']);
        $sobrenome = htmlspecialchars($_POST['sobrenome']);
        $nascimento = (int) $_POST['nascimento'];
        $cpf = (int) $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = (int) $_POST['telefone'];
        $cep = (int) $_POST['cep'];
        $endereco = htmlspecialchars($_POST['endereco']);
        $bairro = htmlspecialchars($_POST['bairro']);
        $complemento = htmlspecialchars($_POST['complemento']);
        $senha = $_POST['senha'];
        $confirmarSenha = $_POST['confirmarSenha'];

        $erros = [];

        if( $nome == ''){
            $erros[] = 'Verifique o nome digitado!';
        }

        // Validar demais campos

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