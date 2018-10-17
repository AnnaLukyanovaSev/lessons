<?php

class BasketSum extends Basket
{
    public static function getListFirstSum()
    {
        self::$Listing = array(self::$names, self::$sum);
        echo 'Get the list of products with primary cost' . PHP_EOL;
        return self::$Listing;
    }

    public static function getListTotalSum()
    {
        echo 'Get the list of products with discount db cost' . PHP_EOL;
        self::$Listing1 = array(self::$names, self::$totalsum);
        return self::$Listing1;
    }

    public static function getFullSum()
    {
        echo 'Get the primary sum' . PHP_EOL;
        return array_sum(self::$sum);
    }

    public static function getFullTotalSum()
    {
        echo 'Get the sum with db discounts' . PHP_EOL;
        return array_sum(self::$totalsum);
    }
}