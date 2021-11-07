<?php

declare(strict_types=1);


namespace App\Kata;


/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class KeepHydrated
{
    public function litres($t): int
    {
        return (int) (floor($t) / 2);
    }

}
