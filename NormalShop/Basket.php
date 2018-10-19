<?php

class Basket
{
    /**
     * @var array $shopList
     */
    public $shopList;

    /**
     * Basket constructor.
     * @param array $shopList
     */
    public function __construct(array $shopList = [[], [], [], [], []])
    {
        $this->shopList = $shopList;
    }

    public function addToBasket(array $row)
    {
        array_push($this->shopList[0], $row[0]);
        array_push($this->shopList[1], $row[1]);
        array_push($this->shopList[2], $row[2]);
        array_push($this->shopList[3], $row[3]);
        array_push($this->shopList[4], (100 - $row[3]) / 100 * $row[2]);
    }

    public function saveBasket()
    {
        // here we save basket to db
    }

    public function getBasket()
    {
        //here we take basket from db
    }

}