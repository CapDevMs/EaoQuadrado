<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;

class MinhaLojaController extends Controller
{

    public function __construct() {
        if (!session()->has('user') || session()->get('user')['tipo'] !== 'vendedor') {
            session()->flash('error', 'Acesso negado. Área restrita para vendedores.');
            redirect()->route('homepage');
        }
    }

    public function minhaLoja()
    {
        View::render('vendedor/minha_loja');
    }
}