<?php
namespace App\Models;

use Core\Model;
use PDOException;

class Cidade extends Model
{
  protected string $table = 'Cidade'; 
  protected string $primaryKey = 'id_cidade';

  public function cadastroEndereco($idEstado, $cidade) {
  try {
    $dadosCidade = [
      'id_estado' => $idEstado,
      'cidade' => $cidade
    ];
    $this->insert($dadosCidade);
    return $this->db->lastInsertId();
  } catch (PDOException $e) {
    return 0;
  };
  }
}
