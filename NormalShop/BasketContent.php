<?php

class BasketContent extends Basket
{
    public function getNumBasket()
    {
        echo 'Number of products in basket equals  '.count($this->Id).PHP_EOL;
    }

    public function getBaskList()
    {
        for ($i=0;$i<count($this->Id);$i++) {
            echo $this->Name[$i].' Primary price: '.$this->Price[$i].' Final price: '.$this->TotalPrice[$i].PHP_EOL;
        }
    }

    public function setSum()
    {
        $this->Sum=array_sum($this->Price);
        $this->FinSum=array_sum($this->TotalPrice);
    }

    public function getSum()
    {
        echo 'Primary sum of products '.$this->Sum.PHP_EOL;
        echo 'Final sum of products '.$this->FinSum.PHP_EOL;
    }

}