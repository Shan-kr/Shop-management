<?php
session_start();

 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $passw=$_POST['passw'];
 $emailses=$_SESSION["email"];


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

$sql="UPDATE users SET fname='$fname', lname='$lname' ,email='$email',passw='$passw'  WHERE email='$emailses'";
mysqli_query($conn,$sql);  
header('location:../php/profile.php');

   ?>