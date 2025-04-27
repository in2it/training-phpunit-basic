<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;

require_once __DIR__ . '/../src/Phonenumber.php';

#[CoversClass(Phonenumber::class)]
class PhonenumberTest extends TestCase
{
    #[DataProvider('goodNumberProvider')]
    public function testPhonenumberAddsNumber(string $number, string $expectedNumber): void
    {
        $phonenumber = new Phonenumber();
        $phonenumber->addNumber($number);
        $this->assertCount(1, $phonenumber->getNumbers());
        $this->assertTrue($phonenumber->hasNumber($expectedNumber));
        $this->assertContains($expectedNumber, $phonenumber->getNumbers());
    }

    public static function goodNumberProvider(): array
    {
        return [
            'Using spaces 012 34 56 78' => ['012 34 56 78', '+3212345678'],
            'Using brackets & dashes (012) 345-678' => ['(012) 345-678', '+3212345678'],
            'Using slashes & dots 012/34.56.78' => ['012/34.56.78', '+3212345678'],
            'Using double zeros 00 32 12 34 56 78' => ['00 32 12 34 56 78', '+3212345678'],
            'Using ISO number +3212345678' => ['+3212345678', '+3212345678'],
        ];
    }
}

