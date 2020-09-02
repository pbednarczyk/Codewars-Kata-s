<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class SumsOfParts
{
    /**
     * @param array $ls
     * @return array
     */
    public function partsSums(array $ls): array
    {
        $result[] = $sum = array_sum($ls);
        foreach ($ls as $value) {
            $sum -= $value;
            $result[] = $sum;
        }
        return $result;
    }
}