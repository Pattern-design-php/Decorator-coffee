<?php
require __DIR__ . '/../autoload.php';

use CoffeeShop\SimpleCoffee;
use CoffeeShop\MilkDecorator;
use CoffeeShop\SugarDecorator;

$coffee = new SimpleCoffee();
echo "Cost of Simple Coffee: $" . $coffee->cost() . "\n";

$milkCoffee = new MilkDecorator($coffee);
echo "Cost of Coffee with Milk: $" . $milkCoffee->cost() . "\n";

$sugarMilkCoffee = new SugarDecorator($milkCoffee);
echo "Cost of Coffee with Milk and Sugar: $" . $sugarMilkCoffee->cost() . "\n";
