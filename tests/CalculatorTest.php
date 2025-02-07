<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

require_once './app/models/Calculator.php';

#[CoversClass(Calculator::class)]
class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3));
        $this->assertEquals(0, $calculator->add(-2, 2));
    }

    public function testSubtraction()
    {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->subtract(3, 2));
        $this->assertEquals(-4, $calculator->subtract(2, 6));
    }
}
