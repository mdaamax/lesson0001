<?php

abstract class Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    abstract public function draw();
}

class Rectangle extends Shape {
    public function draw() {
        echo "<div style='width: {$this->width}px; height: {$this->height}px; background-color: red;'<br></div>";
    }
}

class Ellipse extends Shape {
    public function draw() {
        echo "<div style='width: {$this->width}px; height: {$this->height}px; border-radius: 50%; background-color: blue;'></div>";
    }
}


class Square extends Shape {
    public function draw() {
        echo "<div style='width: {$this->width}px; height: {$this->height}px; background-color: #ecbe06;'></div>";
    }
}


$rectangle = new Rectangle(100, 50);
$rectangle->draw(); // прямоугольник

$ellipse = new Ellipse(80, 80);
$ellipse->draw(); // окружность

$square = new Square(60,60);
$square->draw(); // квадрат.

?>
