<?php
namespace App\Models;

use Core\Model;
use PDOException;

class Cliente extends Model
{
  protected string $table = 'Clientes'; 
  protected string $primaryKey = 'id_cliente';
  

  public function cadastroCliente($idUsuario, $imagem, $nome, $sobrenome, $nascimento, $cpf, $email, $telefone, $senha) {
    try {
      $dadosCliente = [
        'id_usuario' => $idUsuario,
        'imagem' => $imagem,
        'nome' => $nome,
        'sobrenome' => $sobrenome,
        'nascimento' => $nascimento,
        'cpf' => $cpf,
        'email' => $email,
        'numero_telefone' => $telefone,
        'senha' => $senha
        ];
        $this->insert($dadosCliente);
        return $this->db->lastInsertId();
    } catch (PDOException $e) {
      return 0;
    };
  }
}
