<?php

class BasketContent extends Basket
{
    /**
     * return string
     */
    public function getNumBasket()
    {
        echo 'Number of products in basket equals  ' . count($this->id) . PHP_EOL;
    }

    /**
     * return string
     */
    public function getBaskList()
    {
        for ($i = 0; $i < count($this->id); $i++) {
            echo $this->name[$i] . ' Primary price: ' . $this->price[$i] . ' Final price: ' . $this->totalPrice[$i] . PHP_EOL;
        }
    }

    public function setSum()
    {
        $this->sum = array_sum($this->price);
        $this->finSum = array_sum($this->totalPrice);
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