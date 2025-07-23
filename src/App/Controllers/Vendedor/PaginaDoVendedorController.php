<?php

namespace App\Controllers\Vendedor;

use Core\View;
use App\Controllers\Controller;
use App\Models\Produto;

class PaginaDoVendedorController extends Controller
{
    public function paginaDoVendedor()
    {
        View::render('vendedor/pagina_do_vendedor');
    }

    public function produtos()
    {
        $model = new Produto();
        $produtos = $model->getProdutos();
        echo json_encode($produtos);
        exit;
    }
}
