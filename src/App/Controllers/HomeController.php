<?php

namespace App\Controllers;

use Core\View;
use App\Models\Produto;

class HomeController extends Controller
{

    public function index()
    {
        View::render('homepage');
    }

    public function sobre()
    {
        View::render('sobre');
    }

    public function nossaPolitica()
    {
        View::render('nossa_politica');
    }

    public function faq()
    {
        View::render('faq');
    }

    public function termosDeUso()
    {
        View::render('/termos_de_uso');
    }
    public function produtos()
    {
        $model = new Produto;
        $produtos = $model->getProdutos();

        // Ajustar caminho das imagens para acesso no navegador
        foreach ($produtos as &$produto) {
            if (!empty($produto['imagens'])) {
                // remove "src/public" do caminho e adiciona base URL
                $produto['imagens'] = get_base_url() . str_replace('src/public', '', $produto['imagens']);
            }
        }

        echo json_encode($produtos);
        exit;
    }

}
