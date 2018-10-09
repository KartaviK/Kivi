<?php

namespace Kartavik\Kivi\Tests\Unit;

use Kartavik\Kivi\Connection;
use PHPUnit\Framework\TestCase;

/**
 * Class ConnectionTest
 * @package Kartavik\Kivi\Tests\Unit
 * @coversDefaultClass Connection
 * @internal
 */
class ConnectionTest extends TestCase
{
    protected const HOST = 'localhost';
    protected const USERNAME = 'root';
    protected const PASSWORD = 'root';
    protected const DATABASE = 'database';
    protected const PORT = '3306';
    protected const SOCKET = 'socket';
    
    /** @var Connection */
    protected $fakeConnection;

    protected function setUp(): void
    {
        $this->fakeConnection = Connection::instance(
            static::HOST,
            static::USERNAME,
            static::PASSWORD,
            static::DATABASE,
            static::PORT,
            static::SOCKET
        );
    }

    public function testInstance(): void
    {
        $this->assertEquals(Connection::instance(), $this->fakeConnection);
    }

    public function testGetDatabase(): void
    {
        $this->assertEquals(static::DATABASE, $this->fakeConnection->database);
    }

    public function testGetPort(): void
    {
        $this->assertEquals(static::PORT, $this->fakeConnection->port);
    }

    public function testGetPassword(): void
    {
        $this->assertEquals(static::PASSWORD, $this->fakeConnection->password);
    }

    public function testGetHost(): void
    {
        $this->assertEquals(static::HOST, $this->fakeConnection->host);
    }

    public function testGetSocket(): void
    {
        $this->assertEquals(static::SOCKET, $this->fakeConnection->socket);
    }

    public function testGetUsername(): void
    {
        $this->assertEquals(static::USERNAME, $this->fakeConnection->username);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Kartavik\Kivi\Connection does not contain property: invalidProperty
     */
    public function testInvalidProperty(): void
    {
        $this->fakeConnection->invalidProperty;
    }
}
