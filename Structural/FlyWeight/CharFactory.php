<?php
declare(strict_types=1);

namespace Patterns\Structural\FlyWeight;

final class CharFactory
{
    private $characters = [];
    private static $instance;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance(): self
    {
        return new self();
    }

    public function getCharacterInstance(string $char): Char
    {
        if (!array_key_exists($char, $this->characters)) {
            $this->characters[$char] = $this->createInstance($char);
        }
        return $this->characters[$char];
    }

    private function createInstance($text): Printable
    {
        $instance = null;
        if (strlen($text) === 1) {
            $instance = new Char($text);
        } elseif (strlen($text) > 1) {
            $instance = new Word();
            foreach ($text as $char) {
                $instance->addChar($char);
            }
        }

        return $instance;
    }
}
