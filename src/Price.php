<?php

namespace Ewatch\PriceCalculations;

class Price
{
    private $price;
    private $quantity;


    public function __construct(int $price, int $quantity = 1)
    {
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getPrice()
    {
        return number_format($this->price, 2, ",", "");
    }

    public function getTotalPrice()
    {
        return number_format($this->price * $this->quantity, 2, ",", "");
    }
}
