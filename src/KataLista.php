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
     * @param string $product
     *
     * @return int
     * @throws \InvalidArgumentException
     */
    public function addList(string $product): string
    {
        $list = "";
        $list .= $product;

        return $list;
    }
}