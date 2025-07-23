<?php

namespace App\Models;

use Core\Model;

class PaginaVendedor extends Model
{
    protected string $table = "produtos";
    protected string $primaryKey = "id_produto";

    public function getProdutos()
    {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

