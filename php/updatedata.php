<?php
$table=$_POST["table"];
$id=$_POST["id"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
$date=$_POST["date"];
$total=($price * $quantity);
session_start();
$_SESSION["refresh"]="no";
$host="sql207.epizy.com";
$dbusername="epiz_26741312";
$dbpassword="3cxi9a9QPeT";
$dbname="epiz_26741312_shopmanagement";

$conn = mysqli_connect("$host","$dbusername","$dbpassword","$dbname");

if(!$conn)
{
    echo " Error in connection";
}

$sql="UPDATE $table SET price='$price', quantity='$quantity' ,date='$date', total='$total'  WHERE id=$id";
mysqli_query($conn,$sql);  
header('location:../php/update.php');

   ?>