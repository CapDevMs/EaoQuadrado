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

        /*$user->where('email', $_POST['login'], '=')
            ->andWhere('senha', $_POST['senha'])
            ->get();*/

        $user->insert(['nome' => 'Anna Lorena', 'email' => 'anna@gmail.com', 'senha' => '4321']);
        return route('/produto');
        
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
}