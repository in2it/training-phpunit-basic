<?php


namespace In2it\PiggyBank;


class PiggyBank
{
    /**
     * @var int
     */
    private $totalValue;

    /**
     * PiggyBank constructor.
     */
    public function __construct()
    {
        $this->totalValue = 0;
    }

    public function addMoney(int $value): void
    {
        $this->totalValue += $value;
    }

    public function takeMoney(int $value): void
    {
        if ($value <= $this->totalValue) {
            $this->totalValue -= $value;
        }
    }

    public function takeAllMoney(): int
    {
        $value = $this->totalValue;
        $this->totalValue = 0;
        return $value;
    }

    public function moneyIn(): int
    {
        return $this->totalValue;
    }
}