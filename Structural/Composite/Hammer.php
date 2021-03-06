<?php

declare(strict_types=1);

namespace Patterns\Structural\Composite;

class Hammer extends AbstractTool
{
    public function __construct(string $name, float $price)
    {
        parent::__construct($name, $price);
    }
}