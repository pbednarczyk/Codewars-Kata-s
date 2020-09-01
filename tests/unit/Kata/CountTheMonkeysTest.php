<?php

namespace App\Tests\unit\Kata;

use App\Kata\CountTheMonkeys;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class CountTheMonkeysTest extends Unit
{
    /**
     * @var CountTheMonkeys
     */
    private $testingObject;

    protected function _before()
    {
        $this->testingObject = new CountTheMonkeys();
    }

    /**
     * @covers CountTheMonkeys::monkeyCount
     */
    public function testBasicTests(): void
    {
        $this->assertEquals([1, 2, 3, 4, 5], $this->testingObject->monkeyCount(5));
        $this->assertEquals([1, 2, 3], $this->testingObject->monkeyCount(3));
        $this->assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9], $this->testingObject->monkeyCount(9));
        $this->assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], $this->testingObject->monkeyCount(10));
        $this->assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20], $this->testingObject->monkeyCount(20));
    }
}