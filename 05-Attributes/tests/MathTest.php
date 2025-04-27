<?php

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Math.php';

#[CoversClass(Math::class)]
class MathTest extends TestCase
{
    #[Test]
    #[TestWith([0, 0, 0])]
    #[TestWith([1, 1, 2])]
    public function testAddValueReturnsAddedValueResult(int $a, int $b, int $c): void
    {
        $math = new Math();
        $result = $math->add($a, $b);
        $this->assertSame($c, $result);
    }

    #[Test]
    #[TestWith([0, 0, 0])]
    #[TestWith([1, 1, 0])]
    #[TestWith([2, 1, 1])]
    public function testSubtractValueReturnsSubtractedValueResult(int $a, int $b, int $c): void
    {
        $math = new Math();
        $result = $math->sub($a, $b);
        $this->assertSame($c, $result);
    }

    #[Test]
    #[TestWith([1, 2, 2])]
    #[TestWith([2, 2, 4])]
    #[TestWith([3, 2, 6])]
    public function testMultiplyValueReturnsMultipliedValueResult(int $a, int $b, int $c): void
    {
        $math = new Math();
        $result = $math->multi($a, $b);
        $this->assertSame($c, $result);
    }

    #[Test]
    #[TestWith([6, 2, 3.0])]
    #[TestWith([4, 2, 2.0])]
    #[TestWith([2, 2, 1.0])]
    public function testDivideValueReturnsDivisibleValueResult(int $a, int $b, float $c): void
    {
        $math = new Math();
        $result = $math->div($a, $b);
        $this->assertSame($c, $result);
    }

    #[Test]
    public function testDivideByZeroThrowsException(): void
    {
        $math = new Math();
        $this->expectException(DivisionByZeroError::class);
        $math->div(4, 0);
        $this->fail('Expected exception was not thrown');
    }
}
