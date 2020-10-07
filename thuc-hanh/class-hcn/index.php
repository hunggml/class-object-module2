<?php include("class.php");

$width = 19;
$height = 12;

$rectangle = new Rectangle($width,$height);
echo  $rectangle->display();
echo "<br/>";
echo $rectangle->getArea();
echo "<br/>";
echo  $rectangle->getPerimeter();

