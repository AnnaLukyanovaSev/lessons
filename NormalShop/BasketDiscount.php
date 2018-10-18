<?php

class BasketDiscount extends BasketContent
{
    public function setOwnDiscount(int $own = 0)
    {
        $this->finSum = (100 - $own) / 100 * $this->finSum;
    }

    public function setSaleDiscount(int $sale = 0)
    {
        $this->finSum = (100 - $sale) / 100 * $this->finSum;
    }
}