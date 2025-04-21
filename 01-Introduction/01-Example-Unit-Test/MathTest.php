<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/Math.php';
/**
 * Example Math unit test to showcase the usage of PHPUnit
 * File: 01-Introduction/01-Example-Unit-Test/MathTest.php
 */
class MathTest extends TestCase
{
    public function testAddValueReturnsCorrectResult(): void
    {
        $math = new Math();
        $result = $math->add(1, 2);
        $this->assertSame(3, $result);
    }

    public function testDivideValueReturnsCorrectResult(): void
    {
        $math = new Math();
        $result = $math->divide(4, 2);
        $this->assertSame(2.0, $result);
    }

    public function testDivideByZeroThrowsException(): void
    {
        $math = new Math();
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Can not divide by zero');
        $math->divide(4, 0);
        $this->fail('Expected exception was not thrown');
    }
}
