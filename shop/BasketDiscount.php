<?php

class BasketDiscount extends Basket
{
    /**
     * @param int $sale
     */
    public static function setSaleDiscount(int $sale = 10)
    {
        echo 'Sale discount equals ' . $sale . '%' . PHP_EOL;
        echo 'Get list of products with sale discount' . PHP_EOL;
        foreach (self::$Listing1[1] as $key => $value) {
            self::$Listing1[1][$key] = (100 - $sale) / 100 * $value;
        }
        unset($value);
        var_dump(self::$Listing1[1]);

    }

    /**
     * @param int $own
     */
    public static function setOwnDiscount(int $own = 20)
    {
        echo 'Own discount equals ' . $own . '%' . PHP_EOL;
        echo 'Get list of products with own discount' . PHP_EOL;
        foreach (self::$Listing1[1] as $key => $value) {
            self::$Listing1[1][$key] = (100 - $own) / 100 * $value;
        }
        unset($value);
        var_dump(self::$Listing1[1]);

    }
}