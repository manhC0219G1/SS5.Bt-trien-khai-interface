<?php
include "Circle.php";
include "Rectangle.php";
$circle =new Circle1("manh",5);
$doublePersent = rand(1, 100);
$circle->resize($doublePersent);
echo "Area is :".$circle->getArea()."<br>";
$rectangle = new Rectangle1(10,15);
$height=rand(1,100);
$rectangle->resize($height);
echo "Rectangle is : ".$rectangle->getArearectangle();
?>