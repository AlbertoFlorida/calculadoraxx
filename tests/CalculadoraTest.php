<?php

use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    private $calculo;

    protected function setUp(): void
    {
        $this->calculo = new calculadora();
    }

    public function testSuma()
    {
        $this->assertSame(5, $this->calculo->suma(3, 2)); //  3 y 2 es igual a 5
        $this->assertSame(0, $this->calculo->suma(0, 0)); //  0 y 0 es igual a 0
        $this->assertGreaterThan(0, $this->calculo->suma(3, 4)); //  3 y 4 es mayor que 0
    }

    public function testResta()
    {
        $this->assertSame(1, $this->calculo->resta(3, 2)); //  3 y 2 es igual a 1
        $this->assertSame(0, $this->calculo->resta(0, 0)); //  0 y 0 es igual a 0
        $this->assertNotNull($this->calculo->resta(-3, 4)); // -3 y 4 no es nulo
    }

    public function testMultiplicacion()
    {
        $this->assertSame(6, $this->calculo->multiplicacion(3, 2)); //  3 y 2 es igual a 6
        $this->assertSame(0, $this->calculo->multiplicacion(0, 5)); //  0 y 5 es igual a 0
        $this->assertGreaterThan(0, $this->calculo->multiplicacion(5, 5)); //  5 y 5 es mayor que 0
    }

    public function testDivision()
    {
        $this->assertEquals(1.5, $this->calculo->division(3, 2)); //  3 entre 2 es igual a 1.5
        $this->assertSame(1.5, $this->calculo->division(3, 2)); //  3 entre 2 es igual a 1.5 con assertSame
        $this->assertEquals('Error: División por cero', $this->calculo->division(3, 0)); //  0 da el mensaje de error
    }

    public function testRaiz()
    {
        $this->assertEquals(2, $this->calculo->raiz(4)); //  4 es igual a 2
        $this->assertEquals(0, $this->calculo->raiz(0)); //  0 es igual a 0
        $this->assertNotNull($this->calculo->raiz(9)); //  9 no es nulo
    }
}
