<?php

namespace App\Models;

use Core\Model;

class Produto extends Model

{
    protected string $table = "Produtos";
    protected string $primaryKey = "id_produto";

    public function getProdutos()
    {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getLojas()
    {
        $sql = "SELECT * FROM lojas";
        $stmt = $this->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
