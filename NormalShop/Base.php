<?php
require_once 'Basket.php';
require_once 'BasketContent.php';
require_once 'BasketDiscount.php';

// Create connection
$conn = mysqli_connect("127.0.0.1", "root", "", 'shop');
$sql1 = "SELECT * FROM Shop WHERE id=1";
$sql2 = "SELECT * FROM Shop WHERE id=2";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$row1 = mysqli_fetch_row($result1);
$row2 = mysqli_fetch_row($result2);

$myObj1 = new BasketDiscount();
$myObj1->addToBasket($row1);
$myObj1->addToBasket($row2);
//$myObj1->setSaleDiscount();
$myObj1->setSum();
$myObj1->getSum();
var_dump($myObj1);
//$myObj1->getSum();
