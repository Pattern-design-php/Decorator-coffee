<?php

namespace CoffeeShop;

class SugarDecorator extends CoffeeDecorator
{
    public function cost(): float
    {
        return $this->coffee->cost() + 1.0;
    }
}
