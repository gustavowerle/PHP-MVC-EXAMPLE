<?php

namespace GW01;

class Model
{
    private $pdo;
    protected $table;
    
    public function __construct()
    {
        require __DIR__ . '\..\connection.php';  
    }

    public function all()
    {
        $sql = 'SELECT * FROM users';
        $result = $this->getPdo()->query($sql);
        return $result;
    }

    public function get()
    {
        return [
            'nome' => 'Gustavo'
        ];
    }

    public function getPdo()
    {
        return $this->pdo;
    }

    public function setTableName(string $table)
    {
        $this->table = $table;
    } 
    public function getTableName()
    {
        return $this->table;
    }
    
}