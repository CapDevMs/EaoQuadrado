<?php

namespace App\Controllers;

use Core\View;

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

        return route('/contato');

    }
}