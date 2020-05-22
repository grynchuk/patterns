<?php

/**
 * Bridge - remove binding abstraction and implementation
 * via inheritance, and use object composition instead
 */

declare(strict_types=1);

use Patterns\Structural\Bridge\Printer;
use Patterns\Structural\Bridge\LinuxOperator;
use Patterns\Structural\Bridge\WindowsOperator;


$operator = php_uname('s') ==  'windows'
          ? new WindowsOperator()
          : new LinuxOperator();

$printer = new Printer($operator);

$printer->printSome('Messaage');





