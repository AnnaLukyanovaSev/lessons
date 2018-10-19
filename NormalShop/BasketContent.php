<?php

class BasketContent extends Basket
{
    /**
     * @var int $sum
     * @var int $finSum
     */
    public $sum;
    public $finSum;

    /**
     * return string
     */
    public function getNumBasket()
    {
        echo 'Number of products in basket equals  ' . count($this->shopList[0]) . PHP_EOL;
    }

    /**
     * return string
     */
    public function getBaskList()
    {
        for ($i = 0; $i < count($this->shopList[0]); $i++) {
            echo $this->shopList[1][$i] . ' Primary price: ' . $this->shopList[2][$i] . ' Final price: ' . $this->shopList[4][$i] . PHP_EOL;
        }
    }

    public function setSum()
    {
        $this->sum = array_sum($this->shopList[2]);
        $this->finSum = array_sum($this->shopList[4]);
    }

    /**
     * return string
     */
    public function getSum()
    {
        echo 'Primary sum of products ' . $this->sum . PHP_EOL;
        echo 'Final sum of products ' . $this->finSum . PHP_EOL;
    }

}