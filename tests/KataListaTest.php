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
    public function givenAñadirCommandAndProductReturnsListOfProducts(): void
    {
        $this->assertEquals("panx1", $this->stringLista->addList("añadir pan "));
    }

    /**
     * @test
     */
    public function givenAñadirCommandAndProductAndAmountReturnsListOfProducts(): void
    {
        $this->assertEquals("panx2", $this->stringLista->addList("añadir pan 2"));
    }

    /**
    * @test
    */
    public function givenEliminarCommandAndProductAndAmountReturnsListOfProducts(): void
    {
        $this->assertEquals("El producto seleccionado no existe", $this->stringLista->addList("eliminar pan 2"));
    }

    /**
     * @test
     */
    public function givenVaciarCommandListOfProducts(): void
    {
        $this->assertEquals("", $this->stringLista->addList("vaciar"));
    }
}
 