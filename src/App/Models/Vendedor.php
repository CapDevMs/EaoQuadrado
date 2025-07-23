<?php

namespace App\Models;

use Core\Model;
use PDOException;

class Vendedor extends Model
{
    protected string $table = "Vendedores";
    protected string $primaryKey = "id_vendedor";

    public function cadastroVendedor($idEndereco, $idUsuario, $nome, $sobrenome, $cpf, $nascimento, $telefone, $cep, $endereco, $numero, $complemento, $bairro,$email, $senha, $nome_loja, $endereco_loja, $cnpj, $email_loja, $cep_loja, $bairro_loja, $complemento_loja, $telefone_loja, $numero_endereco, $rede_social)
    {
        try {
            $dadosVendedor = [
                'id_endereco' => $idEndereco,
                'id_usuario' => $idUsuario,
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'cpf' => $cpf,
                'nascimento' => $nascimento,
                'telefone' => $telefone,
                'cep' => $cep,
                'endereco' => $endereco,
                'numero' => $numero,
                'complemento' => $complemento,
                'bairro' => $bairro,
                'email' => $email,
                'senha' => $senha,
                'nome_loja' => $nome_loja,
                'endereco_loja' => $endereco_loja,
                'cnpj' => $cnpj,
                'email_loja' => $email_loja,
                'cep_loja' => $cep_loja,
                'bairro_loja' => $bairro_loja,
                'complemento_loja' => $complemento_loja,
                'telefone_loja' => $telefone_loja,
                'numero_endereco' => $numero_endereco,
                'rede_social' => $rede_social
            ];
            $this->insert($dadosVendedor);
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            return 0;
        }
    }
}
