<?php
declare(strict_types=1);

namespace Patterns\Behavioural\Command;

interface CommandInterface
{
   public function execute(string $data): void;
}
