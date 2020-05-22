<?php
declare(strict_types=1);

namespace Patterns\Structural\Bridge;

/**
 * Class LinuxOperator
 * Contain only primitive operations for Linux OS
 * @package Patterns\Structural\Bridge
 */
class LinuxOperator implements OperatorInterface
{
    public function printString(string $text): void
    {
        echo "Linux print: {$text}";
    }
}