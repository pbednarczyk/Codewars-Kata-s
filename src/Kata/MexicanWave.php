<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class MexicanWave
{
    /**
     * @param string $people
     * @return array
     */
    public function wave(string $people): array
    {
        $wave = [];
        if (empty($people)) {

            return $wave;
        }
        foreach (str_split($people) as $k => $char) {
            if ($char === ' ') {
                continue;
            }
            $wave[] = sprintf("%s%s", substr($people, 0, $k), ucfirst(substr($people, $k)));
        }

        return $wave;
    }
}