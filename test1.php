<?php

include_once("circle.php");
include_once("shapeInterface.php");
include_once("square.php");

$circle1=new Circle(5);
echo $circle1->calculateArea();

$square1=new Square(4);
echo $square1->calculateArea();