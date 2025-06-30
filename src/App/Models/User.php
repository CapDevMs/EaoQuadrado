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
        
        $sql = "SELECT * FROM Usuarios WHERE login = :login AND senha = :senha";
        $stmt = $this->query($sql, ['login' => $login, 'senha' => $senha]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function cadastroUsuarios($nome, $email, $senha): int {
        echo $nome;
        try {
            $this->db->beginTransaction();
            $sql = "INSERT INTO Usuarios (nome, email, senha) VALUES(:nome, :email, :senha)";
            $stmt = $this->query($sql, params: ['nome' => $nome, 'email' => $email, 'senha' => $senha]);
            $stmt->execute();
            $this->db->commit();
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            return 0;
        };
    }
}