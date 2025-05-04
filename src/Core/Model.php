<?php

namespace Core;

use \PDO;
use \PDOException;
use \PDOStatement;

abstract class Model
{
    protected PDO $db;
    protected string $table;

    public function __construct()
    {
        
        $database = $_ENV['DATABASE'];
        $username = $_ENV['USERNAME'];
        $password = $_ENV['PASSWORD'];
        $host = $_ENV['HOST'];
        $db = new \PDO("mysql:host=$host;dbname=$database", $username, $password);
        $this->db = $db;
    }

    protected function getTable() 
    {
        if (!is_null($this->table)) 
        {
            return $this->table;
        }

        $className = (new \ReflectionClass($this))->getShortName();
        $table = $className . 's';

        if (substr($table, -1) === 's') {
            $table = substr($table, 0, -1);
        }
        if (substr($table, -1) === 'y') {
            $table = substr($table, 0, -1) . 'ies';
        } else {
            $table .= 's';
        }
        return $table;
    }

    protected function query(string $sql, array $params = []): PDOStatement
    {
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            throw new \RuntimeException("Database query error: " . $e->getMessage());
        }
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM {$this->getTable()}";
        return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id): ?array
    {
        $sql = "SELECT * FROM {$this->getTable()} WHERE id = :id";
        $stmt = $this->query($sql, ['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }

    public function insert(array $data): bool
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        $sql = "INSERT INTO {$this->getTable()} ({$columns}) VALUES ({$placeholders})";
        return $this->query($sql, $data)->rowCount() > 0;
    }

    public function update(array $data, int $id): bool
    {
        $fields = implode(', ', array_map(fn($key) => "{$key} = :{$key}", array_keys($data)));
        $sql = "UPDATE {$this->getTable()} SET {$fields} WHERE id = :id";
        $data['id'] = $id;
        return $this->query($sql, $data)->rowCount() > 0;
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM {$this->getTable()} WHERE id = :id";
        return $this->query($sql, ['id' => $id])->rowCount() > 0;
    }
}