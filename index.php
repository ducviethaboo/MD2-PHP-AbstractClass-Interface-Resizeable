<?php
include 'Interface/Resizeable.php';
include 'Class/Shape.php';
include 'Class/Circle.php';
include 'Class/Rectangle.php';
include 'Class/Square.php';

$circle = new Circle("Circle",100);
echo 'Ban kinh hinh tron la :' .$circle->getRadius();
echo "<br>";
$circle->resize(10);
echo "Ban kinh hinh tron sau khi tang la :" . $circle->getRadius();
echo "<br>";
$rectangle = new Rectangle("Rectangle",100,50);
echo "Chieu dai hinh chu nhat la :" . $rectangle->getWidth();
echo "<br>";
echo "Chieu rong hinh chu nhat la :" . $rectangle->getHeight();
echo "<br>";
$rectangle->resize(10);
echo "Chieu dai hinh chu nhat sau khi tang la :" . $rectangle->getWidth();
echo "<br>";
echo "Chieu rong hinh chu nhat sau khi tang la :" . $rectangle->getHeight();
echo "<br>";
$square = new Square("Hinh chu nhat", 100);
echo "Mot canh hinh chu nhat la : " . $square->getWidth();
echo "<br>";
$square->resize(10);
echo "Mot canh hinh chu nhat sau khi tang la :" . $square->getWidth();