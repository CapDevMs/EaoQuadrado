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

        $login = filter_var($_POST['login'], FILTER_VALIDATE_EMAIL);
        $senha = filter_var($_POST['senha'], FILTER_DEFAULT);

        if (!$login or !$senha){
            $error = 'Usuário e/ou senha inválida';
            return View::render('login', compact('error'));
        }

        $user->where('email', $login, '=')
            ->andWhere('senha', $senha)
            ->get();
        
        if(!empty($user->getData()))
        {
            $_SESSION['user'] = $user->getData()[0];
            return route('/produto');
        }

        $error = 'Usuário e/ou senha inválida';
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

    public function esqueciSenha()
    {
        return View::render('esqueci_senha');
    }

    public function recuperarSenha()
    {
        $login = filter_var($_POST['login'], FILTER_VALIDATE_EMAIL);

        if (!$login){
            $error = 'E-mail não pode estar vazio!';
            return View::render('esqueci_senha', compact('error'));
        }

        $user = new User();

        $user->findBy('email', $login);

        var_dump($user);
        exit;
    }
}