<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class ComplementaryDNA
{
    /**
     * @param $dna
     * @return string
     */
    public function DNA_strand($dna): string
    {
        return strtr($dna, 'ACGT', 'TGCA');
    }
}