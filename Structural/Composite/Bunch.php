<?php

declare(strict_types=1);

namespace Patterns\Structural\Composite;

class Bunch extends AbstractTool
{
    private $items = [];

    public function __construct(string $name, float $price)
    {
        parent::__construct($name, $price);
    }

    public function getName(): string
    {
        $name = parent::getName();
        $names = [];

        foreach ($this->items as $item) {
            $names[] = $item->getName();
        }

        return $name . '(' . implode(',', $names) . ')';
    }

    public function getPrice(): float
    {
        $price = parent::getPrice();

        foreach ($this->items as $item) {
            $price += $item->getPrice();
        }

        return $price;
    }

    function addItem(AbstractTool $tool): bool
    {
        $this->items[] = $tool;
        return true;
    }


}