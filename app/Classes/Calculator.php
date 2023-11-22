<?php

namespace App\Classes;

class Calculator
{
    private $number1;
    private $number2;

    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function add()
    {
        return $this->number1 + $this->number2;
    }

    public function subtract()
    {
        return $this->number1 - $this->number2;
    }

    public function multiply()
    {
        return $this->number1 * $this->number2;
    }

    public function divide()
    {
        // Check if the second number is not 0 to avoid division by zero
        if ($this->number2 != 0) {
            return $this->number1 / $this->number2;
        } else {
            // You can handle the division by zero case as needed
            return 0;
        }
    }
}