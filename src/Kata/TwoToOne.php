<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class TwoToOne
{
    /**
     * @param $a
     * @param $b
     * @return string
     */
    public function longest($a, $b): string
    {
        $charsArray = array_unique(str_split($a . $b));
        sort($charsArray);

        return implode('', $charsArray);
    }
}