<?php

declare(strict_types=1);

namespace App\Tests\unit\Kata;

use App\Kata\GetNthEvenNumber;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class GetNthEvenNumberTest extends Unit
{
    /**
     * @var GetNthEvenNumber
     */
    private $testingObject;

    public function testNthEven(): void
    {
        $this->assertEquals(0, $this->testingObject->nthEven(1));
        $this->assertEquals(2, $this->testingObject->nthEven(2));
        $this->assertEquals(4, $this->testingObject->nthEven(3));
        $this->assertEquals(198, $this->testingObject->nthEven(100));
        $this->assertEquals(2597466, $this->testingObject->nthEven(1298734));
        $this->assertEquals(18993266, $this->testingObject->nthEven(9496634));

    }

    protected function _before()
    {
        $this->testingObject = new GetNthEvenNumber();
    }
}
