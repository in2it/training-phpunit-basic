<?php

declare(strict_types=1);

/**
 * Exercise 01.01: Test the following source code
 * File: 01-Introduction/02-Exercise-01-Source-Code/Greeting.php
 *
 * Test 1: Assert without argument the value is 'Hello Anonymous'
 * Test 2: Assert with argument the value is 'Hello <name>'
 */
class Greeting
{
    public function hello(string $name = 'Anonymous'): string
    {
        return 'Hello ' . $name;
    }
}
