<?php

namespace Kartavik\Kivi\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class BootstrapTest
 * @package Kartavik\Kivi\Tests
 */
class BootstrapTest extends TestCase
{
    public function testExistRutime(): void
    {
        $this->assertTrue(function_exists('rutime'));
    }
}
