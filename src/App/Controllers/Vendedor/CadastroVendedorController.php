<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Models\User;
use App\Models\Endereco;
use App\Controllers\Controller;
use App\Models\Vendedor;
use Core\Validator;
use Exception;

class CadastroVendedorController extends Controller
{

    public function cadastroVendedor()
    {
        View::render('cadastros/cadastro_vendedor');
    }

    private function validarDados()
    {
        $validacao = [
            'nome' => 'required|min:3|max:50',
            'sobrenome' => 'required|min:3|max:50',
            'cpf' => 'required',
            'nascimento' => 'required',
            'telefone' => 'required',
            'cep' => 'required', // Formato: 12345-678
            'endereco' => 'required|min:5|max:100',
            'complemento' => 'nullable|max:50',
            'bairro' => 'required|min:3|max:50',
            'email' => 'required|email|max:100',
            'senha' => 'required|min:6|max:20',

            'nome_loja' => 'required|min:3|max:50',
            'endereco_loja' => 'required|min:5|max:100',
            'cnpj' => 'required', // Formato: 12.345.678/0001-23
            'email_loja' => 'required|email|max:100',
            'cep_loja' => 'required', // Formato: 12345-678
            'bairro_loja' => 'required|min:3|max:50',
            'cidade_loja' => 'required|min:3|max:50',
            'telefone_loja' => 'required',
            'numero_endereco' => 'required|integer|min:1|max:99999',
            'rede_social' => 'required|string|max:255'
        ];

        $validator = new Validator($this->request->all(), $validacao);

        if ($validator->fails()) {

            session()->flash('error', 'Alguns campos não foram preenchidos corretamente.');

            return redirect()->route('cadastroVendedor')->with('errors', $validator->errors());
        }
    }

    public function salvarCadastroVendedor()
    {
        $dadosVendedor = [
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

            "nome_loja" => htmlspecialchars($_POST['nome_loja']),
            "endereco_loja" => htmlspecialchars($_POST['endereco_loja']),
            "cnpj" => htmlspecialchars($_POST['cnpj']),
            "email_loja" => $_POST['email_loja'],
            "cep_loja" => (int) $_POST['cep_loja'],
            "bairro_loja" => htmlspecialchars($_POST['bairro_loja']),
            "telefone_loja" => (int) $_POST['telefone_loja'],
            "numero_endereco" => (int) $_POST['numero_endereco'],
            "rede_social" => htmlspecialchars($_POST['rede_social'])
        ];
        $validacao = $this->validarDados(
            $dadosVendedor['nome'],
                $dadosVendedor['sobrenome'],
                $dadosVendedor['cpf'],
                $dadosVendedor['nascimento'],
                $dadosVendedor['telefone'],
                $dadosVendedor['cep'],
                $dadosVendedor['endereco'],
                $dadosVendedor['numero_endereco'],
                $dadosVendedor['complemento'],
                $dadosVendedor['bairro'],
                $dadosVendedor['email'],
                password_hash($dadosVendedor['senha'], PASSWORD_DEFAULT),
                $dadosVendedor['nome_loja'],
                $dadosVendedor['endereco_loja'],
                $dadosVendedor['cnpj'],
                $dadosVendedor['cep_loja'],
                $dadosVendedor['bairro_loja'],
                $dadosVendedor['telefone_loja'],
                $dadosVendedor['numero_endereco'],
                $dadosVendedor['rede_social']
        );

        try {

            $user = new User();
            $idUsuario = $user->cadastroUsuarios(
                $validacao['nome'],
                $validacao['email'],
                password_hash($validacao['senha'], PASSWORD_DEFAULT),
                "vendedor"
            );

            if (!$idUsuario) {
                throw new \Exception('Falha ao criar usuário');
            }

            $endereco = new Endereco();
            $idEndereco = $endereco->cadastroEndereco(
                $validacao['cep'],
                $validacao['endereco'],
                $validacao['bairro'],
                $validacao['complemento']
            );

            var_dump($idEndereco);
            if (!$idEndereco) {
                throw new \Exception('Falha ao criar endereço.');
            }

            $vendedor = new Vendedor();
            $idVendedor = $vendedor->cadastroVendedor(
                $idEndereco,
                $idUsuario,
                $validacao['nome'],
                $validacao['sobrenome'],
                $validacao['cpf'],
                $validacao['nascimento'],
                $validacao['telefone'],
                $validacao['cep'],
                $validacao['endereco'],
                $validacao['numero_endereco'],
                $validacao['complemento'],
                $validacao['bairro'],
                $validacao['email'],
                password_hash($validacao['senha'], PASSWORD_DEFAULT),
                $validacao['nome_loja'],
                $validacao['endereco_loja'],
                $validacao['cnpj'],
                $validacao['email_loja'],
                $validacao['cep_loja'],
                $validacao['bairro_loja'],
                $validacao['complemento_loja'],
                $validacao['telefone_loja'],
                $validacao['numero_endereco'],
                $validacao['rede_social']
            );

            var_dump($vendedor);

            if (!$idVendedor) {
                $user->delete($idUsuario);
                $endereco->delete($idEndereco);
                throw new \Exception('Falha ao criar vendedor.');
            }

            $successMessage = "Cadastro de vendedor realizado com sucesso!";

            return redirect()->route('cadastroVendedor')->with('success', $successMessage);
        } catch (Exception $error) {
            session()->flash('error', 'Erro ao salvar o cadastro: ' . $error->getMessage());
            return redirect()->route('cadastroVendedor')->with('errors', ['Erro ao salvar o cadastro.']);
        }
    }
}
