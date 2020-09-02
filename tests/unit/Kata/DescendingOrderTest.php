<?php

namespace App\Tests\unit\Kata;

use App\Kata\DescendingOrder;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class DescendingOrderTest extends Unit
{
    /**
     * @var DescendingOrder
     */
    private $testingObject;

    protected function _before()
    {
        $this->testingObject = new DescendingOrder();
    }

    /**
     * @covers DescendingOrder::descendingOrder
     */
    public function testDigits(): void
    {
        $this->assertSame(0, $this->testingObject->descendingOrder(0));
        $this->assertSame(1, $this->testingObject->descendingOrder(1));
    }

    /**
     * @covers DescendingOrder::descendingOrder
     */
    public function testSmallNumbers(): void
    {
        $this->assertSame(51, $this->testingObject->descendingOrder(15));
        $this->assertSame(2110, $this->testingObject->descendingOrder(1021));
    }

    /**
     * @covers DescendingOrder::descendingOrder
     */
    public function testBigNumbers(): void
    {
        $this->assertSame(987654321, $this->testingObject->descendingOrder(123456789));
    }
}