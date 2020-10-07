<?php
include ("Customer.php");
$c1 = new King("Duong Viet Hung","6/6/2002","Ha Noi");
$c2 = new King("Tran Huong Giang","13/8/2002","Viet Tri");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$customer_list = array(
    "0"=>$c1,
    "1"=>$c2,
);
?>

<form action="" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="birthday" placeholder="Day Of Birth">
    <input type="text" name="address" placeholder="Name">
    <button type="submit">Add</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_REQUEST["name"];
    $birth = $_REQUEST["birthday"];
    $address = $_REQUEST["address"];

    $c3 = new King($name,$birth,$address);
    array_push($customer_list, $c3);
}

?>


<table border="1px" cellspacing="0">
    <caption><h1>Customer</h1></caption>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Day Of Birth</th>
        <th>Address</th>
    </tr>
    <?php foreach ($customer_list as  $index => $customer) :?>
    <tr>
        <td><?php echo $index + 1 ?></td>
        <td><?php echo $customer->getName()?></td>
        <td><?php echo $customer->getDateOfBirth()?></td>
        <td><?php echo $customer->getAddress()?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
<?php

