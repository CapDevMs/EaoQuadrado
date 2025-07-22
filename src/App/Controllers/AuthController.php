<?php

namespace App\Controllers;

use App\Models\User;
use Core\Validator;
use Core\View;

class AuthController extends Controller
{
    public function index()
    {
        if (session()->has('user')) {
            return redirect()->route('homepage');
        }
        return View::render('login');
    }

    public function login()
    {

        $user = new User();

        $regraValidacao = [
            'login' => ['required', 'email'],
            'senha' => ['required']
        ];

        $validacao = new Validator($this->request->all(), $regraValidacao);

        if ($validacao->fails()) {

            session()->flash('error', 'Alguns campos não foram preenchidos corretamente.');

            return redirect()->route('login')->with('errors', $validacao->errors());
        }

        $login = filter_var($this->request->input('login'), FILTER_VALIDATE_EMAIL);
        $senha = filter_var($this->request->input('senha'), FILTER_DEFAULT);


        $user->where('email', $login)
            ->andWhere('senha', $senha)
            ->get();
        
        if (empty($user->getData())) {
            session()->flash('error', 'Usuário ou senha inválidos.');
            return redirect()->route('login');
        }

        session()->set('user', $user->getData());

        session()->flash('success', 'Login realizado com sucesso!');
        return redirect()->route('homepage');
    }

    public function logout()
    {
        session()->remove('user');
        session()->flash('success', 'Logout realizado com sucesso!');
        return redirect()->route('login');
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

        $mensagem = 'Caso seja encontrado um e-mail cadastrado, será enviada as informações de recuperação de senha!';

        if (is_null($user->getData())){
            return View::render('esqueci_senha', compact('mensagem'));
        }

        // Lógica de envio do e-mail de recuperação de senha!
    }
}