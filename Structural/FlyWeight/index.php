<?php
declare(strict_types=1);

use Patterns\Structural\FlyWeight\CharFactory;

/**
 * The aim of this pattern is to share state to reduce memory consumption.
 */

$charFactory = CharFactory::getInstance();

$text  = ['h', 'e' , 'l', 'l', 'o', 'w', 'o', 'r', 'l', 'd' , 'hello', 'world'];
$encoding = 'windows-1251';
foreach ($text as  $char) {
    $charInstance = $charFactory->getCharacterInstance($char);
    echo $charInstance->encode($encoding);
}
