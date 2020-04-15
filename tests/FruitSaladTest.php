<?php


namespace In2it\Test\FruitSalad;


use In2it\FruitSalad\FruitSalad;
use PHPUnit\Framework\TestCase;

class FruitSaladTest extends TestCase
{
    public function testBowlIsEmptyAtConstruct()
    {
        $fruitSalad = new FruitSalad();
        $this->assertEmpty($fruitSalad->bowl);
    }

    public function testBowlContainsFruitAddedToBowl()
    {
        $fruit = 'apple';
        $fruitSalad = new FruitSalad();
        $fruitSalad->add($fruit);
        $this->assertContains($fruit, $fruitSalad->bowl);
    }
}