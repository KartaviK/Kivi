<?php

namespace Kartavik\Kivi\Tests\Unit\Exceptions;

use Kartavik\Kivi\Exceptions\ConnectionException;

use PHPUnit\Framework\TestCase;

/**
 * Class ConnectionExceptionTest
 * @package Kartavik\Kivi\Tests\Unit\Exceptions
 * @coversDefaultClass ConnectionException
 * @internal
 */
class ConnectionExceptionTest extends TestCase
{
    protected const MESSAGE = 'message';
    protected const CODE = 1;

    /** @var ConnectionException */
    protected $fakeConnectionException;

    protected function setUp(): void
    {
        $this->fakeConnectionException = new ConnectionException(static::MESSAGE, static::CODE);
    }

    public function testInstance(): void
    {
        $this->assertEquals(
            new ConnectionException(static::MESSAGE, static::CODE),
            $this->fakeConnectionException
        );
    }
}
