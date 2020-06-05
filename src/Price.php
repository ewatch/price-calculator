<?php

namespace Ewatch\PriceCalculations;

class Price
{
    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function getPrice() {
        return number_format($this->price, 2, "," , "");
    }
}
