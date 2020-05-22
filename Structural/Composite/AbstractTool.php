<?php

declare(strict_types=1);

namespace Patterns\Structural\Composite;

abstract class AbstractTool
{
    private $name;
    private $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function addItem(AbstractTool $tool)
    {
        return false;
    }
}


