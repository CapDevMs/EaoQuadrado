<?php
namespace App\Models;

use Core\Model;
use PDOException;

class Endereco extends Model
{
  protected string $table = 'Enderecos'; 
  protected string $primaryKey = 'id_endereco';

  public function cadastroEndereco($cep, $endereco, $bairro, $complemento): int {
  try {
    $dadosEndereco = [
      'cep' => $cep,
      'endereco' => $endereco,
      'bairro' => $bairro,
      'complemento' => $complemento
    ];
    $this->insert($dadosEndereco);
    return $this->db->lastInsertId();
  } catch (PDOException $e) {
    return 0;
  };
  }
}
