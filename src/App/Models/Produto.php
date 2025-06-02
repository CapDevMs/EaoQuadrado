<?php
namespace App\Models;

use Core\Model;

class Produto extends Model

{
    protected string $table = "Produtos";
    protected string $primaryKey = "id_produto";

        public function cadastrarProduto ($dados)
        {
            try{
                $sql="INSERT INTO Produtos 
                    (nome,descricao,marca,preco,imagens,cores,quantidade,id_loja,id_categoria,frete)
                    VALUES
                    (:nome,:descricao,:marca,:preco,:imagens,:cores,:quantidade,:id_loja,:id_categoria,:frete)";

        $this ->query($sql,[
            'nome' => $dados['nome'],
            'descricao' => $dados['descricao'], 
            'marca' => $dados['marca'],
            'preco' => $dados['preco'],
            'imagens' => json_encode($dados['imagens']), 
            'cores' => $dados['cores'],
            'quantidade' => $dados['quantidade'],
            'id_loja' => $dados['id_loja'],
            'id_categoria' => $dados['categoria-produto'],
            'frete' => $dados['frete'] ?? 0
        ]);
    
    
    }
        return true;

        catch (\PDOException $e) {
            error_log("Erro ao cadastrar produto: " . $e->getMessage());
            return false;
            }
        }

            public function deleteProduto($id)
    {
        try {
            $sql = "DELETE FROM Produtos WHERE id_produto = :id";
            $this->query($sql, ['id' => $id]);
            return true;
        } catch (\PDOException $e) {
            error_log("Erro ao deletar produto: " . $e->getMessage());
            return false;
        }
    }
}



