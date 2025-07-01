<?php

namespace App\Controllers;

use Core\View;
use App\Models\Categoria;

class CategoriaController extends Controller
{

    public function categoria()
    {
        View::render('categoria');
    }

    public function categorias()
    {
        $model = new Categoria;
        $categorias = $model->getCategorias();
        echo json_encode($categorias);
        exit;
    }
}

