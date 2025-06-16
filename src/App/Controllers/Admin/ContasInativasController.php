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
        $todasAsSuspensas = $inativasModel->contasInativas(1);
        $todasAsDesativadas = $inativasModel->contasInativas(0);
        $todasAsInativas = $inativasModel->contasInativas('todasAsInativas');
        View::render('admin/contas_inativas',['contasSuspensas' => $todasAsSuspensas,'contasDesativadas' => $todasAsDesativadas,'contasInativas' => $todasAsInativas]);
    }
}