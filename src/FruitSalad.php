<?php


namespace In2it\FruitSalad;


class FruitSalad
{
    /**
     * @var array
     */
    public $bowl;

    /**
     * FruitSalad constructor.
     */
    public function __construct()
    {
        $this->bowl = [];
    }

    /**
     * Add a piece of fruit into the bowl
     *
     * @param string $fruit
     */
    public function add(string $fruit): void
    {
        $this->bowl[] = $fruit;
    }
}