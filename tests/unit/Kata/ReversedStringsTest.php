<?php

namespace App\Tests\unit\Kata;

use App\Kata\ReversedStrings;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class ReversedStringsTest extends Unit
{
    /**
     * @var ReversedStrings
     */
    private $testingObject;

    public function testSolution()
    {
        $this->assertEquals("dlrow", $this->testingObject->solution("world"));
        $this->assertEquals("olleh", $this->testingObject->solution("hello"));
        $this->assertEquals("", $this->testingObject->solution(""));
        $this->assertEquals('h', $this->testingObject->solution("h"));
    }

    protected function _before()
    {
        $this->testingObject = new ReversedStrings();
    }
}
