<?php
$table=$_POST["table"];
$id=$_POST["id"];
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

$sql3="DELETE FROM $table WHERE id=$id";
mysqli_query($conn,$sql3);  
   header('location:../php/delete.php');

   ?>