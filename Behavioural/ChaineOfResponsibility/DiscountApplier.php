<?php

declare(strict_types=1);

namespace Patterns\Behavioural\ChainOfResponsibility;

interface DiscountApplier
{
    function applyDiscount(Custumer $customer,float $price): float;
    function setNext(DiscountApplier $next): DiscountApplier;
}
