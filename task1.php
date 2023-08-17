<?php
//**Task 1: Class Inheritance** 

class Shape {
    public function area() {
        
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return M_PI * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

// Example 
$circle = new Circle(8);
echo "Circle Area: " . $circle->area() . "<br>";

$rectangle = new Rectangle(5, 6);
echo "Rectangle Area: " . $rectangle->area();

//Task 1 Complete.

?>
