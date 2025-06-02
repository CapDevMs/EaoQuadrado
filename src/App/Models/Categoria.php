<?php
namespace App\Models;

use Core\Model;

class Categoria extends Model
{
    protected string $table = 'Categorias'; 
    protected string $primaryKey = 'id';
    

    public static function getCategorias()
    {
        $model = new self();
        $sql = "SELECT * FROM Categorias"; 
        $model->query($sql);
        return $model->getData();
    }
}

?>