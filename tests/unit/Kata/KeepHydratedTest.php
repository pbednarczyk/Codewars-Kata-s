<?php

namespace App\Tests\unit\Kata;

use App\Kata\KeepHydrated;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class KeepHydratedTest extends Unit
{
    /**
     * @var KeepHydrated
     */
    private $testingObject;

    public function testLitres()
    {
        $this->assertEquals(1, $this->testingObject->litres(2));
        $this->assertEquals(0, $this->testingObject->litres(1.4));
        $this->assertEquals(6, $this->testingObject->litres(12.3));
        $this->assertEquals(0, $this->testingObject->litres(0.82));
        $this->assertEquals(5, $this->testingObject->litres(11.8));
        $this->assertEquals(893, $this->testingObject->litres(1787));
        $this->assertEquals(0, $this->testingObject->litres(0));
    }

    protected function _before()
    {
        $this->testingObject = new KeepHydrated();
    }
}
