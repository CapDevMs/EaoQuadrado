<?php

namespace App\Models;
use Core\Model;

class FavoritoVendedor extends Model
{
    protected string $table = "Favoritos";
    protected string $primaryKey = "id_favorito";

    public function getFavoritosVendedoresByUsuario(int $id_usuario): array
    {
        $sql = "SELECT v.id_vendedor, v.nome AS titulo, v.imagem, v.link
                FROM Favoritos f
                JOIN Vendedores v ON f.id_vendedor = v.id_vendedor
                WHERE f.id_usuario = :id_usuario AND f.id_vendedor IS NOT NULL";
    
        $stmt = $this->query($sql, ['id_usuario' => $id_usuario]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
}
