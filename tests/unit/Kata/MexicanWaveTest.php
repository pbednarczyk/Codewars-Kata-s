<?php

namespace App\Tests\unit\Kata;

use App\Kata\MexicanWave;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class MexicanWaveTest extends Unit
{
    /**
     * @var MexicanWave
     */
    private $testingObject;

    /**
     * @covers MexicanWave::wave
     */
    public function testThatSomethingShouldHappen(): void
    {
        $this->assertEquals(["Hello", "hEllo", "heLlo", "helLo", "hellO"], $this->testingObject->wave("hello"));
        $this->assertEquals(
            ["Codewars", "cOdewars", "coDewars", "codEwars", "codeWars", "codewArs", "codewaRs", "codewarS"],
            $this->testingObject->wave("codewars")
        );
        $this->assertEquals([], $this->testingObject->wave(""));
        $this->assertEquals(
            ["Two words", "tWo words", "twO words", "two Words", "two wOrds", "two woRds", "two worDs", "two wordS"],
            $this->testingObject->wave("two words")
        );
        $this->assertEquals([" Gap ", " gAp ", " gaP "], $this->testingObject->wave(" gap "));
    }

    protected function _before()
    {
        $this->testingObject = new MexicanWave();
    }
}