<?php

namespace Kartavik\Kivi;

use Kartavik\Kivi\Exceptions\ConnectionException;

/**
 * Class DB
 * @package Kartavik\Kivi
 */
class DB
{
    /** @var Connection */
    protected static $connection;

    /** @var \mysqli */
    protected static $mysqli;

    public function __construct(Connection $connection)
    {
        static::$mysqli = new \mysqli();
        static::$connection = $connection;
    }

    /**
     * Open the connection to mysql server
     *
     * @return DB
     * @throws ConnectionException
     */
    public function open(): DB
    {
        $success = static::$mysqli->real_connect(
            static::$connection->host(),
            static::$connection->username(),
            static::$connection->password(),
            static::$connection->database(),
            static::$connection->port(),
            static::$connection->socket()
        );

        if (!$success) {
            throw new ConnectionException(static::$mysqli->error, static::$mysqli->errno);
        }

        return $this;
    }

    public function close(): bool
    {
        return static::$mysqli->close();
    }
}
