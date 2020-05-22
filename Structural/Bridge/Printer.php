<?php
declare(strict_types=1);

namespace Patterns\Structural\Bridge;

/**
 * Class Printer
 * Abstraction that contain high level logic of printing independent of OS
 * @package Patterns\Structural\Bridge
 */
class Printer implements ServiceInterface
{
    private $operator;

    public function __construct(OperatorInterface $operator)
    {
        $this->operator = $operator;
    }

    public function printSome(string $message): void
    {
        echo PHP_EOL . "Start printing ..." . PHP_EOL;
        $this->operator->printString($message);
        echo PHP_EOL . "Printing Finished" . PHP_EOL;
    }
}