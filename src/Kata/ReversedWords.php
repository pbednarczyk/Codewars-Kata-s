<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class ReversedWords
{
    public function reverseWords($str): string
    {
        $array = explode(" ", $str);
        return implode(" ", array_reverse($array));
    }
}
