<?php

namespace App\Controllers\Vendedor;

use Core\View;
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

    public function salvarCadastroVendedor()
    {
        $validacao = [
            'nome' => 'required|min:3|max:50',
            'sobrenome' => 'required|min:3|max:50',
            'cpf' => 'required|cpf',
            'nascimento' => 'required|date_format:Y-m-d',
            'telefone' => 'required|phone',
            'cep' => 'required|regex:/^\d{5}-\d{3}$/', // Formato: 12345-678
            'endereco' => 'required|min:5|max:100',
            'numero' => 'required|integer|min:1|max:99999',
            'complemento' => 'nullable|max:50',
            'bairro' => 'required|min:3|max:50',
            'email' => 'required|email|max:100',
            'senha' => 'required|min:6|max:20',

            'nome_loja' => 'required|min:3|max:50',
            'endereco_loja' => 'required|min:5|max:100',
            'cnpj' => 'required|regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/', // Formato: 12.345.678/0001-23
            'email_loja' => 'required|email|max:100',
            'cep_loja' => 'required|regex:/^\d{5}-\d{3}$/', // Formato: 12345-678
            'bairro_loja' => 'required|min:3|max:50',
            'cidade_loja' => 'required|min:3|max:50',
            'telefone_loja' => 'required|phone',
            'numero_endereco' => 'required|integer|min:1|max:99999',
            'rede_social' => 'required|string|max:255',

            'termos' => 'required|accepted',
            'politica' => 'required|accepted',
        ];

        $validator = new Validator($this->request->all(), $validacao);

        if ($validator->fails()) {

            session()->flash('error', 'Alguns campos não foram preenchidos corretamente.');

            return redirect()->to($_ENV['APP_URL'] . 'cadastroVendedor')->with('errors', $validator->errors());
        }
        
        $vendedor = new Vendedor();

        try{
            $vendedor->insert([
                'nome' => $this->request->input('nome'),
                'sobrenome' => $this->request->input('sobrenome'),
                'cpf' => $this->request->input('cpf'),
                'nascimento' => $this->request->input('nascimento'),
                'telefone' => $this->request->input('telefone'),
                'cep' => $this->request->input('cep'),
                'endereco' => $this->request->input('endereco'),
                'numero' => $this->request->input('numero'),
                'complemento' => $this->request->input('complemento'),
                'bairro' => $this->request->input('bairro'),
                'email' => $this->request->input('email'),
                'senha' => password_hash($this->request->input('senha'), PASSWORD_DEFAULT),
                'nome_loja' => $this->request->input('nome_loja'),
                'endereco_loja' => $this->request->input('endereco_loja'),
                'cnpj' => $this->request->input('cnpj'),
                'email_loja' => $this->request->input('email_loja'),
                'cep_loja' => $this->request->input('cep_loja'),
                'bairro_loja' => $this->request->input('bairro_loja'),
                'cidade_loja' => $this->request->input('cidade_loja'),
                'telefone_loja' => $this->request->input('telefone_loja'),
                'numero_endereco' => $this->request->input('numero_endereco'),
                'rede_social' => $this->request->input('rede_social')
            ]);
            
            $successMessage = "Cadastro de vendedor realizado com sucesso!";
            
            return redirect()->route('cadastroVendedor')->with('success', $successMessage);
        }catch (Exception $error) {
            session()->flash('error', 'Erro ao salvar o cadastro: ' . $error->getMessage());
            return redirect()->route('cadastroVendedor')->with('errors', ['Erro ao salvar o cadastro.']);
        }
    }
}