<?php

namespace App\Models;

use Core\Model;
use PDOException;

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

    public function cadastrarProduto($nome, $marca, $modelo, $id_categoria, $preco, $quantidade, $descricao, $imagens){
        try{
            $dadosProduto=[
                'nome' => $nome,
                'marca' => $marca,
                'modelo' => $modelo,
                'id_categoria' => $id_categoria,
                'preco' => $preco,
                'quantidade' => $quantidade,
                'descricao' => $descricao,
                'imagens' => $imagens
            ];
            $this->insert($dadosProduto);
            return $this->db->lastInsertId();
        }   catch (PDOException $e) {
            return 0;
        };
    }
}