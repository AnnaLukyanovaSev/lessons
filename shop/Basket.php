<?php

class Basket
{

    public $Id;
    public $Price;
    public $Name;
    public $Discount;
    public $TotalPrice;
    public static $Count_s = 0;
    public static $sum;
    public static $totalsum;
    public static $Listing;
    public static $Listing1;
    public static $ListingSale;
    public static $ListingOwn;
    public static $names;

    public function __construct(int $id, string $name, int $price, int $discount)
    {
        $this->Id = $id;
        $this->Name = $name;
        $this->Price = $price;
        $this->Discount = $discount;
        $this->TotalPrice = $price * (100 - $discount) / 100;
        self::$names[self::$Count_s] = $name;
        self::$sum[self::$Count_s] = $price;
        self::$totalsum[self::$Count_s] = $this->TotalPrice;
        self::$Count_s++;
    }


    public function saveBasket()
    {
        // here we save basket to db
    }

    public function getBasket()
    {
        //here we take basket from db
    }

    public function getBasketNum()
    {
        echo 'Objects in Basket' . self::$Count_s . PHP_EOL;
    }

}