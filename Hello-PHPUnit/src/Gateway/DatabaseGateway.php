<?php

namespace Romain\HelloPhpUnit\Gateway;

class DatabaseGateway implements DatabaseGatewayInterface
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function listDbs()
    {
        $stmt = $this->pdo->query('SHOW DATABASES');
        return $stmt->fetchAll(\PDO::FETCH_COLUMN);
    }
}