<?php

namespace App\Controllers;

use Core\View;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Categoria;
    }

    public function categoria()
    {
        View::render('categoria');
    }

    public function sendCategorias()
    {
        $categorias = $this->model->getCategorias();
        echo json_encode($categorias);
        exit;
    }

    public function searchProdutoByCategoria()
    {
        $categoria_id  = $_POST['categoria_id'];
        $produtos = $this->model->getByCategoria($categoria_id);
        echo json_encode($produtos);
        exit;
    }

    public function filtroMaxMin()
    {
        $precoMax = $_POST['precoMax'];
        $precoMin = $_POST['precoMin'];
        $produtos = $this->model->getByPrice($precoMin, $precoMax);
        echo json_encode($produtos);
        exit;
    }

    public function searchProduto()
    {
        $produtos = $this->model->searchByName($_GET['BuscarProduto']);
        echo json_encode($produtos);
        exit;
    }
}
