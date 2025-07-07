<?php

namespace App\Controllers\Cliente;

use Core\View;
use App\Controllers\Controller;
use App\Models\FavoritoVendedor;

class FavoritosController extends Controller
{

    public function index()
    {
        View::render('cliente/favoritos');
    }
  
    public function getVendedoresFavoritos()
    {
        $idUsuario = $_SESSION['usuario']['id_usuario'] ?? null;

        if (!$idUsuario) {
            http_response_code(401);
            echo json_encode(['erro' => 'Usuário não autenticado']);
            return;
        }

        $favoritoModel = new \App\Models\FavoritoVendedor();
        $vendedores = $favoritoModel->getFavoritosVendedoresByUsuario($idUsuario);

        header('Content-Type: application/json');
        echo json_encode($vendedores);
    }

    
    public function removeVendedorFavorito($id_vendedor)
    {
        $idUsuario = $_SESSION['usuario']['id_usuario'] ?? null;

        if (!$idUsuario) {
            http_response_code(401);
            echo json_encode(['erro' => 'Usuário não autenticado']);
            return;
        }

        $favoritoModel = new \App\Models\FavoritoVendedor();

        $sql = "DELETE FROM Favoritos WHERE id_usuario = :id_usuario AND id_vendedor = :id_vendedor";
        $favoritoModel->query($sql, [
            'id_usuario' => $idUsuario,
            'id_vendedor' => $id_vendedor
        ]);

        echo json_encode(['sucesso' => true]);
    }

    public function favoritarVendedor()
    {
        $idUsuario = $_SESSION['usuario']['id_usuario'] ?? null;
        $dados = json_decode(file_get_contents("php://input"), true);
        $idVendedor = $dados['id_vendedor'] ?? null;

        if (!$idUsuario || !$idVendedor) {
            http_response_code(400);
            echo json_encode(['erro' => 'Dados inválidos']);
            return;
        }

        $favoritoModel = new \App\Models\FavoritoVendedor();

        $favoritoModel->insert([
            'id_usuario' => $idUsuario,
            'id_vendedor' => $idVendedor
        ]);

        echo json_encode(['sucesso' => true]);
    }


}