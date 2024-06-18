<?php
require_once('class/Circle.php');
require_once('class/Rectangle.php');

$circle = new Circle(4);
echo $circle->calcArea();

echo "<br>";
$rectangle = new Rectangle(10, 5);
echo $rectangle->calcArea();

