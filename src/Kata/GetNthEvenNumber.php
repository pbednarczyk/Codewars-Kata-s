<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class GetNthEvenNumber
{
    public function nthEven($n): int
    {
        return ($n - 1) * 2;
    }
}
