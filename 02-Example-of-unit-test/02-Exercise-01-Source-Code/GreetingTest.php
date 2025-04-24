<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require __DIR__ . '/Greeting.php';

class GreetingTest extends TestCase
{
    public function testHelloWithoutArgumentGreetsAnonymousUser(): void
    {
        $greeting = new Greeting();
        $result = $greeting->hello();
        $this->assertSame('Hello Anonymous', $result);
    }

    public function testHelloWithArgumentGreetsNamedUser(): void
    {
        $greeting = new Greeting();
        $result = $greeting->hello('Jane');
        $this->assertSame('Hello Jane', $result);
    }
}
