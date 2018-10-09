<?php

namespace Kartavik\Kivi;

/**
 * Class QueryNode
 * @package Kartavik\Kivi
 */
class ColumnBuilder
{
    /** @var string */
    protected $name;

    /** @var string[] */
    protected $properties = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addProperty(string $property): void
    {
        $this->properties[] = $property;
    }
}
