<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class JadenCasingStrings
{
    /**
     * @param $string
     * @return string
     */
    public function toJadenCase($string): string
    {
        $wordsArray = explode(' ', $string);
        $jadenArray = [];

        foreach ($wordsArray as $item) {
            $jadenArray[] = ucfirst($item);
        }

        return implode(' ', $jadenArray);
    }
}