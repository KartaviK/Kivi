<?php

namespace Kartavik\Kivi\Tests\Unit;

use Kartavik\Kivi\Connection;
use Kartavik\Kivi\DB;
use PHPUnit\Framework\TestCase;

/**
 * Class DBTest
 * @package Kartavik\Kivi\Tests\Unit
 * @coversDefaultClass DB
 * @internal
 */
class DBTest extends TestCase
{
    /** @var DB */
    protected static $db;

    public static function setUpBeforeClass()
    {
        static::$db = new DB(Connection::instance(
            'localhost',
            'root',
            'root',
            'orm_test'
        ));
    }

    public static function tearDownAfterClass()
    {
        static::$db->close();
    }
}
