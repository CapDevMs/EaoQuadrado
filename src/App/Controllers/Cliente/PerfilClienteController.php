<?php

namespace App\Controllers\Cliente;

use Core\View;
use App\Controllers\Controller;

class PerfilClienteController extends Controller
{

    public function __construct() {
        if (!session()->has('user') || session()->get('user')['tipo'] !== 'cliente') {
            session()->flash('error', 'Acesso negado. Área restrita para clientes.');
            redirect()->route('homepage');
        }
    }

    public function cliente()
    {
        View::render('cliente/meuPerfilCliente');
    }
}