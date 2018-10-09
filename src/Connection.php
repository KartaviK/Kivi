<?php

namespace Kartavik\Kivi;

/**
 * Class Connection
 * @package Kartavik\Kivi
 */
class Connection
{
    /** @var Connection */
    private static $instance = null;

    /** @var string */
    protected $host;

    /** @var string */
    protected $username;

    /** @var string */
    protected $password;

    /** @var string */
    protected $database;

    /** @var string */
    protected $port;

    /** @var string */
    protected $socket;

    protected function __construct(
        string $host = null,
        string $username = null,
        string $password = null,
        string $database = null,
        string $port = null,
        string $socket = null
    ) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->port = $port;
        $this->socket = $socket;
    }

    public static function instance(
        string $host = null,
        string $username = null,
        string $password = null,
        string $database = null,
        string $port = null,
        string $socket = null
    ): Connection {
        return static::$instance
            ?? (static::$instance = new Connection($host, $username, $password, $database, $port, $socket));
    }

    public function host(): string
    {
        return $this->host;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function password(): string
    {
        return $this->password;
    }

    public function database(): string
    {
        return $this->database;
    }

    public function port(): string
    {
        return $this->port;
    }

    public function socket(): string
    {
        return $this->socket;
    }
}
