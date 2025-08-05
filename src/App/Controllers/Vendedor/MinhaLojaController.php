<?php

namespace App\Controllers\Vendedor;

use App\Models\Vendedor;
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
        $vendedor = new Vendedor();
        $vendedor->findById(session()->get('user')['id_usuario']);

        View::render('vendedor/minha_loja', [
            'vendedor' => $vendedor->getData()
        ]);
    }

    public function saveMinhaLoja() {
        $data = $this->request->all();
    }
}