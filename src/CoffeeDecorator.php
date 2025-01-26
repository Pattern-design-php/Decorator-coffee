<?php

namespace CoffeeShop;

abstract class CoffeeDecorator implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    abstract public function cost(): float;
}
