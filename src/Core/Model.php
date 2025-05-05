<?php

namespace Core;

use \PDO;
use \PDOException;
use \PDOStatement;

abstract class Model
{
    protected PDO $db;
    protected string $table;
    protected string $primaryKey = 'id';

    protected string $sql = '';
    protected array $params = [];
    protected ?array $data = [];

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

    public function findAll(): self
    {
        $sql = "SELECT * FROM {$this->getTable()}";
        $stmt = $this->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->data = $result ?: [];
        return $this;
    }

    public function findById(int $id): self
    {
        $sql = "SELECT * FROM {$this->getTable()} WHERE {$this->primaryKey} = :id";
        $stmt = $this->query($sql, ['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->data = $result ?: null;
        return $this;
    }

    public function findBy(string $column, string|int $value, string $operator = '='): self
    {
        $sql = "SELECT * FROM {$this->getTable()} WHERE {$column} {$operator} :value";
        $stmt = $this->query($sql, ['value' => $value]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->data = $result ?: null;
        return $this;
    }

    public function insert(array $data): bool
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        $sql = "INSERT INTO {$this->getTable()} ({$columns}) VALUES ({$placeholders})";
        return $this->query($sql, $data)->rowCount() > 0;
    }

    public function update(int $id, array $data): bool
    {
        $set = '';
        foreach ($data as $column => $value) {
            $set .= "{$column} = :{$column}, ";
        }
        $set = rtrim($set, ', ');
        $sql = "UPDATE {$this->getTable()} SET {$set} WHERE {$this->primaryKey} = :id";
        $data['id'] = $id;
        return $this->query($sql, $data)->rowCount() > 0;
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM {$this->getTable()} WHERE {$this->primaryKey} = :id";
        return $this->query($sql, ['id' => $id])->rowCount() > 0;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function where(string $column, string|int $value, string $operator = '='): self
    {
        if (empty($this->sql)) {
            $this->sql = "SELECT * FROM {$this->getTable()}";
        }

        if (strpos($this->sql, 'WHERE') === false) {
            $this->sql .= " WHERE {$column} {$operator} :{$column}";
        } else {
            $this->sql .= " AND {$column} {$operator} :{$column}";
        }

        $this->params[$column] = $value;
        return $this;
    }

    public function andWhere(string $column, string|int $value, string $operator = '='): self
    {
        if (empty($this->sql)) {
            throw new \RuntimeException("No base SQL query to append AND condition.");
        }

        $this->sql .= " AND {$column} {$operator} :{$column}";
        $this->params[$column] = $value;
        return $this;
    }

    public function orWhere(string $column, string|int $value, string $operator = '='): self
    {
        if (empty($this->sql)) {
            throw new \RuntimeException("No base SQL query to append OR condition.");
        }

        $this->sql .= " OR {$column} {$operator} :{$column}";
        $this->params[$column] = $value;
        return $this;
    }
    
    public function get(): self
    {
        $stmt = $this->query($this->sql, $this->params);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->data = $result ?: [];
        return $this;
    }
}