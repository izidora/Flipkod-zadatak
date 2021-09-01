<?php 
    #apstraktna klasa koja opisuje geometrijski lik
    #definira funkcije za izračun površine i opsega
    #implementira funkciju za ispis
    abstract class Figure {
        public $type;
        public function __construct($type) {
            $this->type = $type;
        }
        abstract public function calculateArea();
        abstract public function calculatePerimeter();
        public function writeResults() {
            return "Area of " . $this->type. " is " . $this->calculateArea() . " and perimeter is " .$this->calculatePerimeter();
        }
    }

    class Circle extends Figure {
        public $radius;
        public function __construct($radius, $type = "circle") {
            parent::__construct($type);
            $this->radius = $radius;
        }

        public function calculateArea() {
            return pow($this->radius, 2) * M_PI;
        }

        public function calculatePerimeter() {
            return 2 * $this->radius * M_PI;
        }

    }

    class Triangle extends Figure {
        public $a, $b, $c, $h;

        public function __construct($a, $b, $c, $h, $type="triangle") {
            parent::__construct($type);
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
            $this->h = $h;
        }

        public function calculateArea() {
            return (($this->a * $this->h) / 2);
        }

        public function calculatePerimeter() {
            return $this->a + $this->b + $this->c;
        }
    }

    $classCircle = new Circle(1);
    echo $classCircle->writeResults();
    echo "<br>";
    $classTriangle = new Triangle(6,5,5,4);
    echo $classTriangle->writeResults();

?>