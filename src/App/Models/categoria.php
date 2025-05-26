<?php
namespace App\Models;

use Core\Model;

class Categoria extends Model
{
    public function getCategorias()
    {
        $sql = "SELECT id, nome FROM categorias";
        $stmt = $this->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>