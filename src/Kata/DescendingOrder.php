<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class DescendingOrder
{
    /**
     * @param int $n
     * @return int
     */
    public function descendingOrder(int $n): int
    {
        $array = str_split((string)$n);
        arsort($array);

        return (int)implode($array);
    }
}