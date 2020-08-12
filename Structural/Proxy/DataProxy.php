<?php
declare(strict_types=1);

namespace Patterns\Structural\Proxy;

class DataProxy implements DataAccessor
{
    private $dataSource;
    private $sensitiveData = null;

    public function __construct()
    {
        $this->dataSource = new DataSource();
    }

    public function getData(): array
    {
        if (is_null($this->sensitiveData)) {
            $this->sensitiveData = $this->dataSource->getData();
        }
        return  $this->sensitiveData;
    }
}
