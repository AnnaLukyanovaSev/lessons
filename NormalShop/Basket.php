<?php

class Basket
{
    /**
     * @var array $id
     * @var array $price
     * @var array $name
     * @var array $discount
     */
    public $id;
    public $price;
    public $name;
    public $discount;

    /**
     * @var array $totalPrice ;
     */
    public $totalPrice = [];
    /**
     * @var float $sum
     */
    public $sum;
    /**
     * @var float $finSum
     */
    public $finSum;

    /**
     * Basket constructor.
     * @param array $id
     * @param array $name
     * @param array $price
     * @param array $discount
     */
    public function __construct(array $id = [], array $name = [], array $price = [], array $discount = [])
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function addToBasket(array $row)
    {
        array_push($this->id, $row[0]);
        array_push($this->name, $row[1]);
        array_push($this->price, $row[2]);
        array_push($this->discount, $row[3]);
        array_push($this->totalPrice, ((100 - $row[3]) / 100 * $row[2]));
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