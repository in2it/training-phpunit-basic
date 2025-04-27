<?php

class Math
{
    public function add(int $baseValue, int $addedValue): int
    {
        return $baseValue + $addedValue;
    }

    public function sub(int $baseValue, int $subtractedValue): int
    {
        return $baseValue - $subtractedValue;
    }

    public function multi(int $baseValue, int $multiplicativeValue): int
    {
        return $baseValue * $multiplicativeValue;
    }

    public function div(int $baseValue, int $divisibleValue): float
    {
        return $baseValue / $divisibleValue;
    }

}
