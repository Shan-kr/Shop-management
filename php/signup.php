<?php

   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $passw=$_POST['password'];
   $confirmpassword=$_POST['confirmpassword'];

  
  if(!empty($fname) || !empty($lname) || !empty($email) || !empty($phone) ||!empty($passw) ||!empty($confirmpassword))
   {
      
     
    $host="sql207.epizy.com";
    $dbusername="epiz_26741312";
    $dbpassword="3cxi9a9QPeT";
    $dbname="epiz_26741312_users";

        $conn = mysqli_connect("$host","$dbusername","$dbpassword","$dbname");

        if(!$conn)
        {
            echo " Error in connection";
        }
        
        $sql1 ="SELECT * FROM users where email='$email'";
        $row=mysqli_query($conn , $sql1);
        if(mysqli_num_rows($row) >0)
           {
           // include '../html/emailerror.html';
           echo"
           <h1 class='text-center' style='margin-left:40%; margin-top:20%'>Email already register</h1>
      <script>
       
       var timer = setTimeout(function() {
           window.location='../html/signup.html'
       }, 2500);
     </script> ";
            
            }
          elseif($passw != $confirmpassword)
             {
           //   include '../html/Passworderror.html';
           echo"
             
           <script>
            alert('Password and Confirm Password does not match');
            var timer = setTimeout(function() {
                window.location='../html/signup.html'
            }, 0);
          </script> ";
             }

         else
             {
              $sql1= "CREATE TABLE users
              (
               id int NOT NULL AUTO_INCREMENT,
              fname varchar(50),
              lname varchar(50),
              email varchar(50),
              phone varchar(50),
              passw varchar(50),
              confirmpassword varchar(50),
              PRIMARY KEY (ID)
              )";           
                mysqli_query($conn , $sql1);
                 $sql = "INSERT INTO users(fname,lname,email,phone,passw,confirmpassword) VALUES('$fname','$lname','$email','$phone','$passw','$confirmpassword')";
            
                   mysqli_query($conn , $sql);
           
                   //include '../html/register.html';
                   echo "<script>
                   alert('Sign up successfully');
                   var timer = setTimeout(function() {
                       window.location='../index.html'
                   },0);
                 </script> ";
           
              }
        
    }
    else
    {
    echo "All field are Required";
    die();
   }
 
?>