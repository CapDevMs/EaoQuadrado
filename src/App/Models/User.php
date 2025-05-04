<?php

namespace App\Models;

use Core\Model;

class User extends Model
{

    protected string $table = 'Usuarios';

    public function login($login, $senha)
    {
        
        $sql = "SELECT * FROM users WHERE login = :login AND senha = :senha";
        $stmt = $this->query($sql, ['login' => $login, 'senha' => $senha]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    
}