<?php

declare(strict_types=1);

namespace App\Kata;

/**
 * @author Paweł Bednarczyk <ibednar88@gmail.com>
 */
class HelpTheBookseller
{
    /**
     * @param $listOfArt
     * @param $listOfCat
     * @return string
     */
    public function stockList($listOfArt, $listOfCat): string
    {
        if (empty($listOfArt) || empty($listOfCat)) {
            return '';
        }
        $arrayList = [];
        foreach ($listOfCat as $cat) {
            $catQty = 0;
            foreach ($listOfArt as $art) {
                if ($art[0] === $cat) {
                    $catQty += ((int)filter_var($art, FILTER_SANITIZE_NUMBER_INT));
                }
            }
            $arrayList[] = sprintf("(%s : %s)", $cat, (string)$catQty);
        }

        return implode(" - ", $arrayList);
    }
}