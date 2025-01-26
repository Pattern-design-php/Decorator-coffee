<?php

namespace CoffeeShop;

class SimpleCoffee implements Coffee
{
    public function cost(): float
    {
        return 1.0;
    }
}
