<?php


namespace Patterns\Structural\FlyWeight;


class Word implements Printable
{
    private $characters = [];

    public function encode(string $newEncoding): string
    {
        $word = '';
        foreach ($this->characters as $char) {
            $word .= $char->encode($newEncoding);
        }

        return $word;
    }

    public function addChar(Char $char): void
    {
        $this->characters[] = $char;
    }
}
