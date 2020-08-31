<?php

declare(strict_types=1);

namespace Patterns\Behavioural\ChainOfResponsibility;

use Patterns\Behavioural\Customer;

class DiscountCalculator
{

    public function calculte(Customer $customer, $price): float
    {
        $holidayDiscount = new HolidayDiscount();
        $personalDiscount = new PersonalDiscount();
        $promotionDiscount = new PromotionDiscount();

        $personalDiscount->setNext($holidayDiscount)
            ->setNext($personalDiscount)
            ->setNext($promotionDiscount);

        return $personalDiscount->applyDiscount($customer, $price);
    }
}