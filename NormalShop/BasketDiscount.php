<?php

class BasketDiscount extends BasketContent
{
public function setOwnDiscount(int $own=0)
{
   $this->FinSum=(100-$own)/100*$this->FinSum;
}
public function setSaleDiscount(int $sale=0)
{
    $this->FinSum=(100-$sale)/100*$this->FinSum;
}
}