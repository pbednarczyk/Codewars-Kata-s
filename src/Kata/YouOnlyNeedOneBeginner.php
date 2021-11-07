<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class YouOnlyNeedOneBeginner
{
    public function solution($a, $x): bool
    {
        return in_array($x, $a, true);
    }
}
