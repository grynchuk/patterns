<?php

declare(strict_types=1);

namespace Patterns\Structural\Proxy;

class DataSource implements DataAccessor
{
    public function getData(): array
    {
        return [
            'sensitive'
        ];
    }
}