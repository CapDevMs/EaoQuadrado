<?php

namespace App\Models;

use Core\Model;

class User extends Model
{
    protected string $table = 'contas_inativas';
    protected string $primaryKey = 'id_contaInativa';

    public function contasInativas_todas()
    {
        $sql = "SELECT * FROM contas_inativas;";
        $result = '';
        echo($result);
    }
    public function contasInativas_suspensas()
    {
        $sql = "SELECT * FROM contas_inativas WHERE status = 0;" ;
    }
    public function contasInativas_desativadas()
    {
        $sql = "SELECT * FROM contas_inativas WHERE status = 1;";
    }
    
}