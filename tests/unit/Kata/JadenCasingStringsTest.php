<?php

namespace App\Tests\unit\Kata;

use App\Kata\JadenCasingStrings;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class JadenCasingStringsTest extends Unit
{
    /**
     * @var JadenCasingStrings
     */
    private $testingObject;

    protected function _before()
    {
        $this->testingObject = new JadenCasingStrings();
    }

    /**
     * @covers JadenCasingStrings::toJadenCase
     */
    public function testJadenCase(): void
    {
        $str = "How can mirrors be real if our eyes aren't real";
        $this->assertEquals("How Can Mirrors Be Real If Our Eyes Aren't Real", $this->testingObject->toJadenCase($str));
    }
}