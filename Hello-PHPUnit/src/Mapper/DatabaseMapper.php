<?php

namespace Romain\HelloPhpUnit\Mapper;

use Romain\HelloPhpUnit\Entity\Database;
use Romain\HelloPhpUnit\Gateway\DatabaseGatewayInterface;

class DatabaseMapper
{
    protected $gateway;

    public function __construct(DatabaseGatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    public function findAll()
    {
        $dbsArray = $this->gateway->listDbs();
        $dbsObj = [];
        if (!$dbsArray) {
            return $dbsObj;
        }
        foreach ($dbsArray as $dbName) {
            $dbsObj[] = new Database($dbName);
        }
        return $dbsObj;
    }
}