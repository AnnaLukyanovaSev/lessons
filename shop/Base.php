
<?php
require_once 'Basket.php';
require_once 'BasketDiscount.php';
require_once 'BasketSum.php';
// Create connection
$conn = mysqli_connect("127.0.0.1","root", "",'shop');
$sql1="SELECT * FROM Shop WHERE id=1";
$sql2="SELECT * FROM Shop WHERE id=2";
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$row1=mysqli_fetch_row($result1);
$row2=mysqli_fetch_row($result2);
$myObj1=new Basket($row1[0],$row1[1],$row1[2],$row1[3]);
$myObj2=new Basket($row2[0],$row2[1],$row2[2],$row2[3]);
BasketSum::getListTotalSum();
BasketDiscount::setOwnDiscount();
