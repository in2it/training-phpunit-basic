<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Math.php';

class MathTest extends TestCase
{
    public function testAddValueReturnsAddedValueResult(): void
    {
        $math = new Math();
        $result = $math->add(1, 1);
        $this->assertSame(2, $result);
    }

    public function testSubtractValueReturnsSubtractedValueResult(): void
    {
        $math = new Math();
        $result = $math->sub(1, 1);
        $this->assertSame(0, $result);
    }

    public function testMultiplyValueReturnsMultipliedValueResult(): void
    {
        $math = new Math();
        $result = $math->multi(2, 2);
        $this->assertSame(4, $result);
    }

    public function testDivideValueReturnsDivisibleValueResult(): void
    {
        $math = new Math();
        $result = $math->div(4, 2);
        $this->assertSame(2.0, $result);
    }

    public function testDivideByZeroThrowsException(): void
    {
        $math = new Math();
        $this->expectException(DivisionByZeroError::class);
        $math->div(4, 0);
        $this->fail('Expected exception was not thrown');
    }
}
