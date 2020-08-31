<?php

declare(strict_types=1);

namespace Patterns\Behavioural\ChainOfResponsibility;

abstract class DiscountApplierAbstract implements DiscountApplier
{
    private $next;

    public function applyDiscount(Custumer $customer,float $price): float {

        if ($this->canApplyDiscount($customer)) {
            $price = $this->apply($customer, $price);
        } elseif ($this->next instanceof DiscountApplier) {
            $price = $this->next->applyDiscount($customer, $price);
        }
        return $price;
    }

    public function setNext(DiscountApplier $next): DiscountApplier
    {
        $this->next = $next;
        return $next;
    }

    abstract protected function canApplyDiscount(Customer $customer): bool;

    abstract protected function apply($customer, $price): float;
}