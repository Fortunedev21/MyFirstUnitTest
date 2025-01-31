<?php

use PHPUnit\Framework\TestCase;

require_once './app/models/Calculator.php';

class CalculatorTest extends TestCase
{
    /**
     * @covers Calculator::add
     */
    public function testAddition()
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3));
        $this->assertEquals(0, $calculator->add(-2, 2));
    }

    /**
     * @covers Calculator::subtract
     */
    public function testSubtraction()
    {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->subtract(3, 2));
        $this->assertEquals(-4, $calculator->subtract(2, 6));
    }
}
