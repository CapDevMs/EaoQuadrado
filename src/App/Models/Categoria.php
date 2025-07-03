<?php

namespace App\Models;

use Core\Model;

class Categoria extends Model
{
    protected string $table = 'produtos';
    protected string $primaryKey = 'id';

    public function getCategorias()
    {
        $sql = "SELECT * FROM categorias";
        $stmt = $this->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getByPrice(float $precoMin, float $precoMax)
    {
        if ($precoMax > 0 && $precoMin < $precoMax) {
            $sql = "SELECT * FROM produtos WHERE preco >= :precoMin AND preco <= :precoMax ORDER BY preco ASC";

            $stmt = $this->query($sql, [':precoMin' => $precoMin, ':precoMax' => $precoMax]);
        } else {
            $sql = "SELECT * FROM produtos WHERE preco >= :precoMin ORDER BY preco ASC";

            $stmt = $this->query($sql, [':precoMin' => $precoMin]);
        }

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function searchByName(string $pesquisa)
    {
        if ($pesquisa == "") {
            exit;
        }

        $searchTerm = '%' . $pesquisa . '%';

        $sql = $this->findBy('nome', $searchTerm, 'like');

        return $sql;
    }
}
