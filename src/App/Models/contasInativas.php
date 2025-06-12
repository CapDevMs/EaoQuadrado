<?php

namespace App\Models;

use Core\Model;

class ContasInativas extends Model
{
    protected string $table = 'contas_inativas';
    protected string $primaryKey = 'id_contaInativa';

    public function contasInativas($status)
    {
        
        $sql = "SELECT * FROM contas_inativas WHERE status = :status";
        $stmt = $this->query($sql, ['status' => $status]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
}