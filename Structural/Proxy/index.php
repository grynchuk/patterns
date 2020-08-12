<?php

/**
 * The aim of the proxy pattern is to provide object that control subject object who perform sensitive or complicated operation
 * the common usage case
 * - access control
 * - caching data
 * - provide access to remote objects via network
 */

declare(strict_types=1);

use Patterns\Structural\Proxy\DataProxy;

$dataSource = new DataProxy();

$dataSource->getData();