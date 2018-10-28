<?php

namespace Kartavik\Kivi\Exception;

/**
 * Class Connection
 * @package Kartavik\Kivi\Exception
 */
class Connection extends \Exception
{
    public function __construct(string $message, int $code, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
