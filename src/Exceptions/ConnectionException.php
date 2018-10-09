<?php

namespace Kartavik\Kivi\Exceptions;

/**
 * Class ConnectionException
 * @package Kartavik\Kivi\Exceptions
 */
class ConnectionException extends \Exception
{
    public function __construct(string $message, int $code, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
