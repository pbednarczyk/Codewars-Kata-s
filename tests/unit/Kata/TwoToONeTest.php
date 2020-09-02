<?php

namespace App\Tests\unit\Kata;

use App\Kata\TwoToOne;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class TwoToONeTest extends Unit
{
    /**
     * @var TwoToONe
     */
    private $testingObject;

    protected function _before()
    {
        $this->testingObject = new TwoToONe();
    }

    /**
     * @param $actual
     * @param $expected
     */
    private function revTest($actual, $expected): void
    {
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers TwoToONe::longest
     */
    public function testBasics() {
        $this->revTest($this->testingObject->longest("aretheyhere", "yestheyarehere"), "aehrsty");
        $this->revTest($this->testingObject->longest("loopingisfunbutdangerous", "lessdangerousthancoding"), "abcdefghilnoprstu");
        $this->revTest($this->testingObject->longest("inmanylanguages", "theresapairoffunctions"), "acefghilmnoprstuy");
        $this->revTest($this->testingObject->longest("lordsofthefallen", "gamekult"), "adefghklmnorstu");
    }
}