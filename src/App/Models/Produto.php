<?php

namespace App\Models;

use Core\Model;

class Produto extends Model

{
    protected string $table = "Produtos";
    protected string $primaryKey = "id_produto";

    public function getProdutos($id)
    {
        $sql = "SELECT * FROM produtos WHERE id_produto = :id";
        $stmt = $this->query($sql, ['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
