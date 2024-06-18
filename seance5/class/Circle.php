<?php
require_once 'Shape.php';

class Circle implements Shape{
    // static private $radius;
    private $radius;

    public function __construct($r){
        // self::$radius = $r;
        $this->radius = $r;
    }
    public function calcArea(){
        // return self::$radius;
        return $this->radius * $this->radius * pi();
    }
}


?>