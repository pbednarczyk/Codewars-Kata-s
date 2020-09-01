<?php

namespace App\Tests\unit\Kata;

use App\Kata\ComplementaryDNA;
use Codeception\Test\Unit;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class ComplementaryDNATest extends Unit
{
    /**
     * @var ComplementaryDNA
     */
    private $testingObject;

    protected function _before()
    {
        $this->testingObject = new ComplementaryDNA();
    }

    /**
     * @covers ComplementaryDNA::DNA_strand
     */
    public function testExamples(): void
    {
        $this->assertEquals("TTTT", $this->testingObject->DNA_strand("AAAA"));
        $this->assertEquals("AAAA", $this->testingObject->DNA_strand("TTTT"));
        $this->assertEquals("TAACG", $this->testingObject->DNA_strand("ATTGC"));
        $this->assertEquals("ATTGC", $this->testingObject->DNA_strand("TAACG"));
        $this->assertEquals("CATA", $this->testingObject->DNA_strand("GTAT"));
        $this->assertEquals("GTAT", $this->testingObject->DNA_strand("CATA"));
    }
}