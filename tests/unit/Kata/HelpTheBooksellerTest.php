<?php

namespace App\Tests\unit\Kata;

use App\Kata\HelpTheBookseller;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class HelpTheBooksellerTest extends Unit
{
    /**
     * @var HelpTheBookseller
     */
    private $testingObject;

    protected function _before()
    {
        $this->testingObject = new HelpTheBookseller();
    }

    private function revTest($actual, $expected): void
    {
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers HelpTheBookseller::stockList
     */
    public function testThatSomethingShouldHappen(): void
    {
        $b = ["BBAR 150", "CDXE 515", "BKWR 250", "BTSQ 890", "DRTY 600"];
        $c = ["A", "B", "C", "D"];
        $res = "(A : 0) - (B : 1290) - (C : 515) - (D : 600)";
        $this->revTest($this->testingObject->stockList($b, $c), $res);

        $b = ["ABAR 200", "CDXE 500", "BKWR 250", "BTSQ 890", "DRTY 600"];
        $c = ["A", "B"];
        $res = "(A : 200) - (B : 1140)";
        $this->revTest($this->testingObject->stockList($b, $c), $res);
    }
}