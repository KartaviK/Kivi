<?php

namespace Kartavik\Kivi;

/**
 * Class EnvironmentConfiguration
 * @package Kartavik\Kivi
 */
class Environment
{
    /** @var array */
    protected static $cache;

    /** @var string */
    protected $prefix;

    /** @var string */
    protected $postfix;

    protected function __construct(string $prefix = '', string $postfix = '')
    {
        $this->prefix = $prefix;
        $this->postfix = $postfix;
    }

    public static function config(string $prefix = '', string $postfix = ''): Environment
    {
        if (array_key_exists($prefix, static::$cache))
        return new Environment($prefix, $postfix);
    }

    public function get(string $key, callable $default = null)
    {
        $variable = $this->prefix . getenv($key) . $this->postfix;

        if ($variable === false) {
            if ($default === null) {

            }
        }
    }

    public function set(string $key)
    {

    }
}
