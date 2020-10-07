<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT bac 2</title>
</head>
<body>
<h3>PT bac 2 : ax^2+bx=c</h3>
<form action="" method="post">
    <input type="number" name="a" placeholder="enter a">
    <input type="number" name="b" placeholder="enter b">
    <input type="number" name="c" placeholder="enter c">
    <button type="submit"> Calculate</button>
</form>
</body>
</html>
<?php
include("QuadraticEquation.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];

    $ptb2 = new QuadraticEquation($a, $b, $c);

    $ptb2->getDiscriminant();
    if ($ptb2->getDiscriminant() >= 0) {
        echo "X1 = " . $ptb2->getRoot1();
        echo "<br/>";
        echo "X2 = " . $ptb2->getRoot2();
    } elseif ($ptb2->getDiscriminant() == 0) {
        echo $ptb2->getRoot1();
    } else {
        echo "The equation has no roots";
    }

}




