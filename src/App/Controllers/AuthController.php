<?php

namespace App\Controllers;

use Core\View;

class AuthController
{
    public function index()
    {
        View::render('login');
    }

    public function login()
    {
        $loginTeste = 'admin@admin.com';
        $senhaTeste = 'admin';

        if (isset($_SESSION['user'])) {
            
            $this->logout();

            header('Location: /');
            return;
        }

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if ($login == $loginTeste && $senha == $senhaTeste)
        {
            $_SESSION['user'] = $login;
            header('Location: /');
            return;
        }

        $error = "Usuário ou senha inválidos.";

        View::render('login', compact('error'));
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            session_destroy();
        }
    }
}