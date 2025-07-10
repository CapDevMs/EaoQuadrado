<?php

namespace App\Models;

use Core\Model;

class Carrinho extends Model
{
    protected string $table = 'Produtos';
    protected string $primaryKey = 'id_produtos';

    public function carrinho($ListaCarrinho)
    {
        // foreach ($ListaCarrinho as $produto) {
        //   echo $produto;  
        // };
        $sql = "SELECT * FROM Produtos";
        $stmt = $this->query($sql);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
