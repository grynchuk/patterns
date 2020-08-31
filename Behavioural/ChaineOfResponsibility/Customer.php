<?php

declare(strict_types=1);

namespace Patterns\Behavioural\ChainOfResponsibility;

use Patterns\Behavioural\Discount\ChainOfResponsibility;

class Customer
{

    public function discounts(): array {
        return [
            Discount::PERSONAL
        ];
    }
}