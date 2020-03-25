<?php

namespace In2it\PHPUnit;

class HelloWorld
{
    public function sayHello(string $argument = 'World'): string
    {
        return 'Hello ' . $argument . '!';
    }
}
