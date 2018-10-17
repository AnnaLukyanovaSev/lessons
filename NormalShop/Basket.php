<?php

class Basket
{

    public $Id;
    public $Price;
    public $Name;
    public $Discount;

    /**
     * @var array $TotalPrice ;
     */
     public $TotalPrice=[];
    /**
     * @var float $Sum
     */
     public $Sum;
    /**
     * @var float $FinSum
     */
     public $FinSum;
    /**
     * Basket constructor.
     * @param array $id
     * @param array $name
     * @param array $price
     * @param array $discount
     */
    public function __construct(array $id = [], array $name = [], array $price = [], array $discount = [])
    {
        $this->Id = $id;
        $this->Name = $name;
        $this->Price = $price;
        $this->Discount = $discount;
    }

    public function addToBasket(array $row)
    {
        array_push($this->Id, $row[0]);
        array_push($this->Name, $row[1]);
        array_push($this->Price, $row[2]);
        array_push($this->Discount, $row[3]);
        array_push($this->TotalPrice,((100-$row[3])/100*$row[2]));
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