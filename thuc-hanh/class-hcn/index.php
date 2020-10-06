<?php include("class.php") ?>
<?php
$width = 10;
$height = 15;
$rectangle = new Rectangle($width, $height);

echo "perimeter : " . $rectangle->getPerimeter();
echo "<br/>";
echo "Area : " . $rectangle->getArea();
echo "<br/>";
echo  $rectangle->display();
