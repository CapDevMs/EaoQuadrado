<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;

class CadastroVendedorController extends Controller
{

    public function cadastroVendedor()
    {
        View::render('cadastros/cadastro_vendedor');
    }

    public function salvarCadastroVendedor()
    {
        
        $successMessage = "Cadastro de vendedor realizado com sucesso!";
        
        
        session('success', $successMessage);
        return redirect('/cadastro-vendedor');
    }
}