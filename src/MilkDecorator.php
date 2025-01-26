<?php

namespace CoffeeShop;

class MilkDecorator extends CoffeeDecorator
{
    public function cost(): float
    {
        return $this->coffee->cost() + 1.0;
    }
}
