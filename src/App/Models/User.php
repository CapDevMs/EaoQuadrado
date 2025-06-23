<?php

namespace App\Models;

use Core\Model;
use PDOException;

class User extends Model
{
    protected string $table = 'Usuarios';
    protected string $primaryKey = 'id_usuario';

    public function login($login, $senha)
    {
        
        $sql = "SELECT * FROM users WHERE login = :login AND senha = :senha";
        $stmt = $this->query($sql, ['login' => $login, 'senha' => $senha]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function cadastroUsuarios($nome, $email, $senha): int {
        try {
            $this->db->beginTransaction();
            $sql = "INSERT INTO Usuarios VALUES(nome = :nome, email = :email, senha = :senha)";
            $this->query(sql: $sql, params: ['nome' => $nome, 'email' => $email, 'senha' => $senha]);
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            return False;
        };
    }

    
}