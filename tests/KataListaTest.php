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
    public function givenNewProductAndAmountReturnsListOfProducts(): void
    {
        $this->assertEquals("panx2", $this->stringLista->addList("añadir pan 2"));
    }


}
 