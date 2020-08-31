<?php
declare(strict_types=1);

namespace Patterns\Behavioural\ChainOfResponsibility;


class PromotionDiscount extends DiscountApplierAbstract
{

    protected function canApplyDiscount(Customer $customer): bool
    {
        return in_array(Discount::PROMOTION, $customer->discounts(), true);
    }

    protected function apply($customer, $price): float
    {
        $discount = (new Discount())->getValue(Discount::PROMOTION);
        return $price - ($price * $discount/100) * 0.5;
    }
}