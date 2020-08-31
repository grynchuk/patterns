<?php

declare(strict_types=1);

namespace Patterns\Behavioural\ChainOfResponsibility;

class HolidayDiscount extends DiscountApplierAbstract
{

    protected function canApplyDiscount(Customer $customer): bool
    {
        return in_array(Discount::HOLIDAY, $customer->discounts, true);
    }

    protected function apply($customer, $price): float
    {
      $discount = (new Discount())->getValue(Discount::HOLIDAY);

      return $price - ($price * $discount/100);
    }
}