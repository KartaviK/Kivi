<?php

namespace Kartavik\Kivi\Tests\Unit\Exception;

use Kartavik\Kivi\Exception\Connection;
use PHPUnit\Framework\TestCase;

/**
 * Class ConnectionTest
 * @package Kartavik\Kivi\Tests\Unit\Exception
 * @coversDefaultClass Connection
 * @internal
 */
class ConnectionTest extends TestCase
{
    protected const MESSAGE = 'message';
    protected const CODE = 1;

    /** @var Connection */
    protected $fakeConnectionException;

    protected function setUp(): void
    {
        $this->fakeConnectionException = new Connection(static::MESSAGE, static::CODE);
    }

    public function testInstance(): void
    {
        $this->assertEquals(
            new Connection(static::MESSAGE, static::CODE),
            $this->fakeConnectionException
        );
    }
}
