<?php

namespace Deg540\StringCalculatorPHP;

use http\Exception\InvalidArgumentException;
use function PHPUnit\Framework\isNull;
use function PHPUnit\Framework\throwException;

class KataLista
{
    // TODO: String Lista Kata

    public function __construct()
    {
    }

    /**
     * @param string $instruction
     * @param int $amount
     *
     * @return int
     * @throws \InvalidArgumentException
     */
    public function addList(string $instruction): string
    {
        $parts = explode(" ",$instruction);
        if($parts[0] == "añadir") {
            return $parts[1] . "x" . $parts[2];
        }

        return $instruction . "x1";
    }
}