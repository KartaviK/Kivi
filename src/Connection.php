<?php

namespace Kartavik\Kivi;

/**
 * Class Connection
 * @package Kartavik\Kivi
 *
 * @property-read string $host
 * @property-read string $username
 * @property-read string $password
 * @property-read string $database
 * @property-read string $port
 * @property-read string $socket
 */
final class Connection
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

    public function __get($name)
    {
        switch ($name) {
            case 'host':
                return $this->host;
            case 'username':
                return $this->username;
            case 'password':
                return $this->password;
            case 'database':
                return $this->database;
            case 'port':
                return $this->port;
            case 'socket':
                return $this->socket;
            default:
                throw new \InvalidArgumentException(static::class . " does not contain property: " . $name);
        }
    }
}
