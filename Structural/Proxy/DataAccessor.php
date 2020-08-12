<?php

declare(strict_types=1);

namespace Patterns\Structural\Proxy;

interface DataAccessor
{
    public function getData(): array;
}