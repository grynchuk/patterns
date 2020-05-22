<?php
declare(strict_types=1);

namespace Patterns\Structural\Bridge;
/**
 * Class WindowsOperator
 * Contain only primitive operations for Windows OS
 * @package Patterns\Structural\Bridge
 */
class WindowsOperator implements OperatorInterface
{
    public function printString(string $text): void
    {
        echo "WINDOWS print: {$text}";
    }
}