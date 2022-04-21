<?php

namespace Akaunting\Tests\Money;

use Akaunting\Money\Currency;
use Akaunting\Money\Money;

class HelpersTest extends TestCase
{
    public function testMoney()
    {
        $this->assertEquals(new Money(25, new Currency('USD')), money(25));
        $this->assertEquals(new Money(25, new Currency('USD')), money(25, 'USD'));
        $this->assertEquals(new Money(25, new Currency('TRY')), money(25, 'TRY'));
    }

    public function testCurrency()
    {
        $this->assertEquals(new Currency('USD'), currency('USD'));
        $this->assertEquals(new Currency('TRY'), currency('TRY'));
    }
}
