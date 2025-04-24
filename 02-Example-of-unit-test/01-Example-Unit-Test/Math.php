<?php

declare(strict_types=1);

/**
 * Example Math class to showcase the usage of PHPUnit
 * File: 02-Example-of-unit-test/01-Example-Unit-Test/Math.php
 */
class Math
{
    public function add(int $baseValue, int $incrementValue): int
    {
        return $baseValue + $incrementValue;
    }

    public function divide(int $baseValue, int $divisorValue): float
    {
        /*if (0 === $divisorValue) {
            throw new Exception('Can not divide by zero');
        }*/
        return $baseValue / $divisorValue;
    }
}
