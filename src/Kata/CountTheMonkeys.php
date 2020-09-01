<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class CountTheMonkeys
{
    /**
     * @param $n
     * @return array
     */
    public function monkeyCount($n): array
    {
        return range(1, $n);
    }
}