<?php
declare(strict_types=1);

namespace Patterns\Behavioural\Command;

class ConsoleCommand implements CommandInterface
{
    public function execute(string $data): void
    {
        echo PHP_EOL . "Console : " . $data . PHP_EOL;
    }
}