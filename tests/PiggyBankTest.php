<?php


namespace In2it\Test\PiggyBank;


use In2it\PiggyBank\PiggyBank;
use PHPUnit\Framework\TestCase;

class PiggyBankTest extends TestCase
{
    private $piggyBank;

    public function setUp(): void
    {
        $this->piggyBank = new PiggyBank();
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent::tearDown();
        unset ($this->piggyBank);
    }

    public function testPiggyBankIsEmptyAtStart()
    {
        $this->assertEquals(0, $this->piggyBank->moneyIn());
    }

    public function testPiggyBankCanAddMoney()
    {
        $this->piggyBank->addMoney(20);
        $this->piggyBank->addMoney(10);
        $this->piggyBank->addMoney(20);
        $this->assertEquals(50, $this->piggyBank->moneyIn());
    }

    public function testWeCanTakeMoneyOut()
    {
        $this->piggyBank->addMoney(20);
        $this->piggyBank->takeMoney(10);
        $this->assertEquals(10, $this->piggyBank->moneyIn());
    }

    public function testWeCanNotTakeMoreMoneyOutThanWhatIsIn()
    {
        $this->piggyBank->addMoney(10);
        $this->piggyBank->takeMoney(20);
        $this->assertEquals(10, $this->piggyBank->moneyIn());
    }

    public function testWeCanTakeAllMoneyOut()
    {
        $this->piggyBank->addMoney(10);
        $this->piggyBank->addMoney(20);
        $this->piggyBank->addMoney(20);
        $allMoney = $this->piggyBank->takeAllMoney();
        $this->assertEquals(50, $allMoney);
        $this->assertEquals(0, $this->piggyBank->moneyIn());
    }
}