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


    public function insert(array $dados): bool
    {
    $sql = "INSERT INTO {$this->table} 
        (nome, marca, modelo, id_categoria, preco, quantidade, descricao, imagens) 
        VALUES (:nome, :marca, :modelo, :id_categoria, :preco, :quantidade, :descricao, :imagens)";
    
    $stmt = $this->db->prepare($sql);

    return $stmt->execute([
        ':nome' => $dados['nome'],
        ':marca' => $dados['marca'],
        ':modelo' => $dados['modelo'],
        ':id_categoria' => $dados['id_categoria'],
        ':preco' => $dados['preco'],
        ':quantidade' => $dados['quantidade'],
        ':descricao' => $dados['descricao'],
        ':imagens' => $dados['imagens'] ?? null,
    ]);
}

}
