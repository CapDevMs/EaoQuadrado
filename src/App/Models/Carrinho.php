<?php

namespace App\Models;

use Core\Model;

class Carrinho extends Model
{
    protected string $table = 'Produtos';
    protected string $primaryKey = 'id_produtos';

    public function carrinho()
    {
        $sql = "SELECT * FROM Produtos";
        $stmt = $this->query($sql);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function enviarCarrinho()
    {
        $sql = "INSERT () INTO Usuarios VALUES ()";
        
    }
}
