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
        $products = [];
        $products[] = $parts[1];
        if ($parts[0] == "añadir") {
            if ($parts[2] == NULL) {
                return $parts[1] . "x1";
            }
            return $parts[1] . "x" . $parts[2];
        }
        if ($parts[0] == "eliminar") {
            if (!in_array($parts[1], $products)) {
                return "El producto seleccionado no existe";
            }
        }
        if ($parts[0] == "vaciar") {
            unset($products);

            return "";
        }

        return "";
    }
}