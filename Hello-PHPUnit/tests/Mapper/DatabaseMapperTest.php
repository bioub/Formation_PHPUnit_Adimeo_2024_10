<?php

namespace Romain\HelloPhpUnitTest\Mapper;

use PHPUnit\Framework\TestCase;
use Romain\HelloPhpUnit\Gateway\DatabaseGateway;
use Romain\HelloPhpUnit\Mapper\DatabaseMapper;

class DatabaseMapperTest extends TestCase
{
    public function testRealDatabase()
    {
        $this->expectException(\PDOException::class);

        $pdo = new \PDO('mysql:host=localhost', 'root', '');
        $gateway = new DatabaseGateway($pdo);
        $mapper = new DatabaseMapper($gateway);

        $dbs = $mapper->findAll();
    }

    public function testWithStub() {
        $gateway = $this->createStub(DatabaseGateway::class);

        $gateway->method('listDbs')->willReturn(['db1', 'db2', 'db3']);

        $mapper = new DatabaseMapper($gateway);

        $dbs = $mapper->findAll();
        $this->assertCount(3, $dbs);
    }

    public function testWithMock() {
        $gateway = $this->createMock(DatabaseGateway::class);

        $gateway->expects($this->exactly(1))
            ->method('listDbs')
            ->willReturn(['db1', 'db2', 'db3']);

        $mapper = new DatabaseMapper($gateway);

        $dbs = $mapper->findAll();
        $this->assertCount(3, $dbs);
    }
}