<?php

namespace Ewatch\PriceConversions\Tests;

use Ewatch\PriceCalculations\Price;
use PHPUnit\Framework\TestCase;

class PriceTest extends TestCase
{
    /** @test */
    public function it_returns_an_integer_price_as_float()
    {
        $price = new Price(100);
        $this->assertEquals("100,00", $price->getPrice());
    }
}
