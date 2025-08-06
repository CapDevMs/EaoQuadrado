<?php

namespace App\Controllers\Vendedor;

use App\Models\Vendedor;
use App\Services\Upload;
use Core\Validator;
use Core\View;
use App\Controllers\Controller;

class MinhaLojaController extends Controller
{

    public function __construct() {
        if (!session()->has('user') || session()->get('user')['tipo'] !== 'vendedor') {
            session()->flash('error', 'Acesso negado. Área restrita para vendedores.');
            redirect()->route('homepage');
        }

        parent::__construct();
    }

    public function minhaLoja()
    {
        if(session()->has('errors')){
            var_dump(session()->get('errors'));
            exit;
        }
        $vendedor = new Vendedor();
        $vendedor->findBy('id_usuario', session()->get('user')['id_usuario']);

        View::render('vendedor/minha_loja', [
            'vendedor' => $vendedor->getData()
        ]);
    }

    public function saveMinhaLoja() {
        $validateRules = [
            'nome_loja' => 'required|string|max:100',
            'telefone_loja' => 'required|string|max:15',
            'email_loja' => 'required|email|max:100',
            'endereco_loja' => 'required|string|max:255',
            'cep_loja' => 'required|string|max:10',
            'numero_endereco' => 'required|string|max:10',
            'document' => 'required|string|in:CPF,CNPJ',
            'banner_loja' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
        ];

        $validator = new Validator($this->request->all(), $validateRules);
        if ($validator->fails()) {
            session()->flash('error', 'Dados inválidos. Verifique os campos e tente novamente.');
            redirect()->route('vendedor.minhaLoja')->with('errors', $validator->errors());
        }

        $uploadService = new Upload();
        $vendedor = new Vendedor();
        $vendedor->findBy('id_usuario', session()->get('user')['id_usuario']);

        $uploadDir = UPLOAD_DIR . 'vendedores' . DIRECTORY_SEPARATOR;
        $uploadResult = $uploadService->uploadImagem($this->request->input('banner_loja'), $uploadDir);
        
        if (!$uploadResult['success']) {
            session()->flash('error', implode('<br>', $uploadResult['errors']));
            redirect()->route('vendedor.minhaLoja');
        }

        $data = [
            'nome_loja' => $this->request->input('nome_loja'),
            'telefone_loja' => $this->request->input('telefone_loja'),
            'email_loja' => $this->request->input('email_loja'),
            'endereco_loja' => $this->request->input('endereco_loja'),
            'cep_loja' => $this->request->input('cep_loja'),
            'numero_endereco' => $this->request->input('numero_endereco'),
            'banner_loja' => $uploadResult['fileName'],
        ];

        if($this->request->input('document') == 'CPF'){
            array_merge($data, [
                'cpf' => $this->request->input('cpf')
            ]);
        }

        if($this->request->input('document') == 'CNPJ'){
            array_merge($data, [
                'cnpj' => $this->request->input('cnpj')
            ]);
        }


        $vendedor->update($vendedor->getData()['id_vendedor'],$data);

        session()->flash('success', 'Loja atualizada com sucesso!');
        redirect()->route('vendedor.minhaLoja');

    }
}