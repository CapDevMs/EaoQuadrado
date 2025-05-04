<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;

class AuthController extends Controller
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            
            $this->logout();

            return route('/');
        }

        View::render('login');
    }

    public function login()
    {
        $user = new User();

        $user->where('email', $_POST['login'])
            ->where('senha', $_POST['senha'])
            ->get();
        
        var_dump($user->getData());
        echo '<br>';
        var_dump($_POST);
        exit;

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if ($login == $loginTeste && $senha == $senhaTeste)
        {
            $_SESSION['user'] = $login;
            return route('/');
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

        return route('/login');
    }
}