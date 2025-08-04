<?php

namespace App\Models;

use Core\Model;

class Categoria extends Model
{
    protected string $table = 'Categorias';
    protected string $primaryKey = 'id_categorias';

    public function getCategorias()
    {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getByCategoria(int $categoria)
    {
        $sql = "SELECT * FROM Produtos WHERE id_categoria = :categoria";
        $stmt = $this->query($sql, [':categoria' => $categoria]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getByPrice(float $precoMin, float $precoMax)
    {
        if ($precoMax > 0 && $precoMin < $precoMax) {
            $sql = "SELECT * FROM Produtos WHERE preco >= :precoMin AND preco <= :precoMax ORDER BY preco ASC";

            $stmt = $this->query($sql, [':precoMin' => $precoMin, ':precoMax' => $precoMax]);
        } else {
            $sql = "SELECT * FROM Produtos WHERE preco >= :precoMin ORDER BY preco ASC";

            $stmt = $this->query($sql, [':precoMin' => $precoMin]);
        }

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function searchByName(string $pesquisa)
    {
        $searchTerm = '%' . $pesquisa . '%';

        // $sql = $this->findBy('nome', $searchTerm, 'like');
        $sql = "SELECT * FROM Produtos WHERE nome LIKE :pesquisa";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':pesquisa', $searchTerm);
        $stmt->execute();

        $Produtos = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $Produtos;
    }
}
