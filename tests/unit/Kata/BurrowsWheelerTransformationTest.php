<?php

namespace App\Tests\unit\Kata;

use App\Kata\BurrowsWheelerTransformation;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class BurrowsWheelerTransformationTest extends Unit
{
    /**
     * @var BurrowsWheelerTransformation
     */
    private $testingObject;

    protected function _before()
    {
        $this->testingObject = new BurrowsWheelerTransformation();
    }

    /**
     * @covers BurrowsWheelerTransformation::encode
     */
    public function testEncodeFunction(): void
    {
        $this->assertEquals($this->testingObject->encode("bananabar"), ["nnbbraaaa", 4]);
        $this->assertEquals($this->testingObject->encode("Humble Bundle"), ["e emnllbduuHB", 2]);
        $this->assertEquals($this->testingObject->encode("Mellow Yellow"), ["ww MYeelllloo", 1]);
    }

    /**
     * @covers BurrowsWheelerTransformation::decode
     */
    public function testDecodeFunction(): void
    {
        $this->assertEquals($this->testingObject->decode("nnbbraaaa", 4), "bananabar");
        $this->assertEquals($this->testingObject->decode("e emnllbduuHB", 2), "Humble Bundle");
        $this->assertEquals($this->testingObject->decode("ww MYeelllloo", 1), "Mellow Yellow");
    }
}