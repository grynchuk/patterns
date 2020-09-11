<?php
declare(strict_types=1);

namespace Patterns\Behavioural\Command;


class BrowserCommand implements CommandInterface
{
    public function execute(string $data): void
    {
     echo "Browser: <b>{$data}</b>";
    }
}