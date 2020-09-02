<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class BurrowsWheelerTransformation
{
    /**
     * @param $s
     * @return array
     */
    public function encode($s)
    {
        $arrayChars = str_split($s);
        $matrix = [];

        foreach($arrayChars as $k => $char){
            $firstPart = substr($s, -$k);
            $lastPart = substr($s, 0, -$k);

            $matrix[] = $firstPart . $lastPart;
        }
        sort($matrix);

        $lastColumn = implode("", array_map(
            static function ($m){
                return substr($m, -1);
            }, $matrix));

        return [$lastColumn, array_search($s, $matrix, true)];
    }

    /**
     * @param $s
     * @param $i
     * @return mixed
     */
    public function decode($s, $i)
    {
        $lastColumn = str_split($s);
        $clone = $lastColumn;
        $strLen = strlen($s);

        for($j=1; $j<$strLen; $j++){
            sort($clone);
            $c = [];
            foreach($lastColumn as $k=>$a){
                $c[] = $a . $clone[$k];
            }
            $clone = $c;
        }
        sort($clone);

        return $clone[$i];
    }
}