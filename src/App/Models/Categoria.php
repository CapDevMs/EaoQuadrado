<?php
namespace App\Models;

use Core\Model;

class Categoria extends Model
{
    protected string $table = 'Categorias'; 
    protected string $primaryKey = 'id';

    public function getCategorias()
    {
        $sql = "SELECT * FROM categorias";
        $stmt = $this->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>