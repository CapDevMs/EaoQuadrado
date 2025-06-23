<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\ContasInativas;
use Core\View;

class ContasInativasController extends Controller
{

    public function contasInativas()
    {
        $inativasModel = new ContasInativas();
        $contasInativas = $inativasModel->contasInativas('todasAsInativas');
        $contasSuspensas = $inativasModel->contasInativas(1);
        $contasDesativadas = $inativasModel->contasInativas(0);
        View::render('admin/contas_inativas',['contasSuspensas' => $contasSuspensas,'contasDesativadas' => $contasDesativadas,'contasInativas' => $contasInativas]);
    }
} 