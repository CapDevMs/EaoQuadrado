<?php

namespace App\Controllers;

use Core\View;
use App\Models\Contato;

class HomeController extends Controller
{

    public function index()
    {
        return View::render('homepage');
    }

    public function sobre()
    {
        return View::render('sobre');
    }

    public function nossaPolitica()
    {
        return View::render('nossa_politica');
    }

    public function contato()
    {
        return View::render('contato');
    }

    public function enviarContato()
    {
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $telefone = $_POST['telefone'] ?? '';
        $descricao = $_POST['descricao'] ?? '';
        
        if(empty($nome) or empty($email) or empty($telefone) or empty($descricao))
        {
            $error = 'Preencha os campos obrigatórios';
            return View::render('contato', compact('error'));
        }

        $now = date('Y-m-d H:i:s');

        $contato = new Contato();

        $contato->insert([
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone,
            'mensagem' => $descricao,
            'data_envio' => $now,
        ]);

        return route('/contato');
    }
}