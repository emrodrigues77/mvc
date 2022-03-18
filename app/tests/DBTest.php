<?php

namespace Test;

use App\Core\DB;
use PHPUnit\Framework\TestCase;

class DBTest extends TestCase {
    protected $connection;

    public function setUp(): void {
        //$this->connection = DB::getConnection();
    }

    public function tearDown(): void {
        //$this->connection->close();
    }

    public function testConnection() {
        $this->connection = DB::getConnection();
        $this->assertInstanceOf(\PDO::class, $this->connection);
        $this->assertClassHasStaticAttribute('connection', DB::class);
    }
}