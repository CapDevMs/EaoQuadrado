<?php
namespace App\Models;

use Core\Model;

class Produto extends Model {
    protected string $table = "produtos";
    protected string $primaryKey = "id_produto";
    public function findProductDetailsById(int $id): mixed
{
    $sql = "SELECT 
                p.*, 
                l.nome as nomeLoja,
                c.nome as nomeCategoria 
            FROM {$this->table} p
            LEFT JOIN lojas l ON p.id_loja_fk = l.id_loja
            LEFT JOIN categorias c ON p.id_categoria_fk = c.id_categoria
            WHERE p.{$this->primaryKey} = :id";
    
    $stmt = $this->query(sql: $sql, params: ['id' => $id]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}
    /**
     * Busca todas as imagens de um produto específico.
     *
     * @param int $id O ID do produto.
     * @return array Retorna um array com as imagens do produto.
     */
    public function findImagesById(int $id): array
    {
        // 1. A consulta SQL busca na tabela de imagens
        $sql = "SELECT imagem_url, alt_text 
                FROM produto_imagens 
                WHERE id_produto_fk = :id 
                ORDER BY ordem ASC";

        // 2. Executa a consulta de forma segura
        $stmt = $this->query(sql: $sql, params: ['id' => $id]);

        // 3. Retorna TODAS as imagens encontradas como um array
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function findRecomendados(int $excludeId, int $limit = 4): array
    {
        $sql = "SELECT 
                    id_produto as id, 
                    nome as titulo, 
                    imagem_url as imagem, 
                    preco,
                    './produto' as link -- Link fixo como no seu JS
                FROM {$this->table} 
                WHERE {$this->primaryKey} != :excludeId 
                ORDER BY RAND() 
                LIMIT :limit";
        
        $stmt = $this->query($sql, ['excludeId' => $excludeId, 'limit' => $limit]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

