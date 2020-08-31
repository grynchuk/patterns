<?php
declare(strict_types=1);

namespace Patterns\Behavioural\ChainOfResponsibility;


class PersonalDiscount extends DiscountApplierAbstract
{

    protected function canApplyDiscount(Customer $customer): bool
    {
        return in_array(Discount::PERSONAL, $customer->discounts(), true);
    }

    protected function apply($customer, $price): float
    {
        $discount = (new Discount())->getValue(Discount::PERSONAL);

        return $price - ($price * $discount/100) * 2;
    }
}