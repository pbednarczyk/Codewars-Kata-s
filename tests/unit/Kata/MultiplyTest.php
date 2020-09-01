<?php

namespace App\Tests\unit\Kata;

use App\Kata\Multiply;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class MultiplyTest extends Unit
{
    /**
     * @var Multiply
     */
    private $testingObject;

    protected function _before()
    {
        $this->testingObject = new Multiply();
    }

    /**
     * @covers Multiply::multiply()
     */
    public function testThatSomethingShouldHappen(): void
    {
        $this->assertEquals(4, $this->testingObject->multiply(2,2));
        $this->assertEquals(9, $this->testingObject->multiply(3,3));
    }
}