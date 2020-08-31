<?php

declare(strict_types=1);

use \Patterns\Behavioural\ChainOfResponsibility\Customer;
use \Patterns\Behavioural\ChainOfResponsibility\DiscountCalculator;

$customer = new Customer();
$price = 100;

$discountCalculator = new DiscountCalculator();
$value = $discountCalculator->calculte($customer, $price);