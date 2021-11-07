<?php

namespace App\Tests\unit\Kata;

use App\Kata\ReversedWords;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class ReversedWordsTest extends Unit
{
    /**
     * @var ReversedWords
     */
    private $testingObject;

    public function testReverseWords(): void
    {
        $this->assertEquals("world! hello", $this->testingObject->reverseWords("hello world!"));
        $this->assertEquals("this like speak doesn't yoda", $this->testingObject->reverseWords("yoda doesn't speak like this"));
        $this->assertEquals("foobar", $this->testingObject->reverseWords("foobar"));
        $this->assertEquals("editor kata", $this->testingObject->reverseWords("kata editor"));
        $this->assertEquals("boat your row row row", $this->testingObject->reverseWords("row row row your boat"));
    }

    protected function _before()
    {
        $this->testingObject = new ReversedWords();
    }
}
