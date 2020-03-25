<?php
declare(strict_types=1);

namespace In2it\Test\PHPUnit;

use In2it\PHPUnit\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testClassMethodReturnsHelloWorldString()
    {
        $expectedString = 'Hello World!';
        $this->assertSame($expectedString, (new HelloWorld())->sayHello());
    }

    public function testClassMethodReturnsHelloArgumentString()
    {
        $expectedString = 'Hello students!';
        $this->assertSame($expectedString, (new HelloWorld())->sayHello('students'));
    }
}
