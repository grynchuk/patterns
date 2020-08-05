<?php

declare(strict_types=1);

namespace Patterns\Structural\FlyWeight;

/**
 * Char is flyweight class that is invariant (does not change its initial state) and can be shared
 * @package Patterns\Structural\FlyWeight
 */
class Char implements Printable
{
    private $symbol;
    private $currentEncoding;

    public function __construct(string $symbol)
    {
        $this->symbol = $symbol;
        $this->currentEncoding = mb_detect_encoding($symbol);
    }

    public function encode(string $newEncoding): string
    {
        return iconv($this->currentEncoding, $newEncoding, $this->symbol);
    }
}
