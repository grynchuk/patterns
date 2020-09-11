<?php

declare(strict_types=1);

namespace Patterns\Behavioural\Command;

class Printer
{
    private $command;

    public function __construct(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function printMessage (string $message) {
        $this->command->execute($message);
    }

}