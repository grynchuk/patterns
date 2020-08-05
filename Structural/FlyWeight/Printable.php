<?php

declare(strict_types=1);

namespace Patterns\Structural\FlyWeight;

interface Printable
{
    public function encode(string $newEncoding): string;
}
