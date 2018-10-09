<?php

namespace Kartavik\Kivi\Tests;

use Kartavik\Kivi\Builder;
use Kartavik\Kivi\QueryBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Class ConditionTest
 * @package Kartavik\Kivi\Tests
 */
class ConditionTest extends TestCase
{
    /** @var array */
    protected $ru;

    /** @var array */
    protected $rustart;

    public function testIssetCondition(): void
    {
        $asd = null;
        $this->rustart = getrusage();

        $builder = new Builder();
        var_dump($builder);
        $queryBuilder = new QueryBuilder($builder);

        call_user_func([$this, 'hello'], $queryBuilder);
        var_dump($builder);

        $this->ru = getrusage();
        $this->assertTrue(true);
    }

    protected function hello(QueryBuilder $builder)
    {
        $builder->integer('id');
    }

    /*protected function tearDown()
    {
        $this->setOutputCallback(function () {
            return "This process used "
                . rutime($this->ru, $this->rustart, "utime")
                . " ms for its computations\n"
                . "It spent "
                . rutime($this->ru, $this->rustart, "stime")
                . " ms in system calls\n";
        });
    }*/
}
