<?php
class Calculator {
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add() {
        return $this->num1 + $this->num2;
    }

    public function subtract() {
        return $this->num1 - $this->num2;
    }

    public function multiply() {
        return $this->num1 * $this->num2;
    }

    public function divide() {
        if ($this->num2 == 0) {
            return "На ноль делить нельзя!";
        } else {
            return $this->num1 / $this->num2;
        }
    }
}

$num1 = 10;
$num2 = 5;

$calculator = new Calculator($num1, $num2);

echo "Сложение: " . $calculator->add() . "<br>";
echo "Вычитание: " . $calculator->subtract() . "<br>";
echo "Умножение: " . $calculator->multiply() . "<br>";
echo "Деление: " . $calculator->divide() . "<br>";



?>