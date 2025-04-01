<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\KataLista;
use PHPUnit\Framework\TestCase;

class KataListaTest extends TestCase
{
    private KataLista $stringLista;

    protected function setUp(): void
    {
        parent::setUp();
        $this->stringLista = new KataLista();
    }

    /**
     * @test
     */
    public function givenNewProductAddToList(): void
    {
        $this->assertEquals("pan", $this->stringLista->addList("pan"));
    }


}
 