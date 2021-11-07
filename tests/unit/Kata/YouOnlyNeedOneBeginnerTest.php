<?php

namespace App\Tests\unit\Kata;

use App\Kata\YouOnlyNeedOneBeginner;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class YouOnlyNeedOneBeginnerTest extends Unit
{
    /**
     * @var YouOnlyNeedOneBeginner
     */
    private $testingObject;

    public function testSolution(): void
    {
        $this->assertTrue($this->testingObject->solution(array('a', 'b', 'c', 'd', 'e', "f"), "a"));
        $this->assertTrue($this->testingObject->solution(array('a', 'b', 'c', 'd', 'e', "f"), "f"));
        $this->assertTrue($this->testingObject->solution(array('a', 'b', 'c', 'd', 'e', "f"), "c"));
        $this->assertFalse($this->testingObject->solution(array('a', 'b', 'c', 'd', 'e', "f"), "y"));
        $this->assertFalse($this->testingObject->solution(array('a', 'b', 'c', 'd', 'e', "f"), null));
    }

    protected function _before()
    {
        $this->testingObject = new YouOnlyNeedOneBeginner();
    }
}
