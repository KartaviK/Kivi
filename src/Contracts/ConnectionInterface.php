<?php

namespace Kartavik\Kivi\Contracts;

/**
 * Interface ConnectionInterface
 * @package Kartavik\Kivi\Contracts
 */
interface ConnectionInterface
{
    /**
     * Host of your schema
     *
     * @example localhost
     * @example 127.0.0.1
     *
     * @return string
     */
    public function host(): string;

    /**
     * Your unique username for access to server
     *
     * @example root
     *
     * @return string
     */
    public function username(): string;

    /**
     * Your special password for access to server
     *
     * @example root
     *
     * @return string
     */
    public function password(): string;

    /**
     * The name of the database to which a permanent connection will be made
     *
     * @return string
     */
    public function database(): string;

    /**
     * Port number for service driver
     *
     * @example 3306
     *
     * @return string
     */
    public function port(): string;

    /**
     * Special socket configuration to protect connection
     *
     * @return string
     */
    public function socket(): string;
}
