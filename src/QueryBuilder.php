<?php

namespace Kartavik\Kivi;

/**
 * Class QueryBuilder
 * @package Kartavik\Kivi
 */
class QueryBuilder
{
    /** @var Builder */
    protected $builder;

    /** @var ColumnBuilder[] */
    protected $stack;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function integer(string $column): QueryBuilder
    {
        $this->builder->test = 123;
        $column = new ColumnBuilder($column);
        $column->addProperty('INT');
        $this->stack[] = $column;

        return $this;
    }
}
