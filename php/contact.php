<?php

   $name=$_POST['name'];
   $email=$_POST['email'];
   $info=$_POST['info'];

  echo "link";
  
  if(!empty($name) || !empty($email) || !empty($info))
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
    
        else
             {

                $sql1= "CREATE TABLE contact
                (
                 id int NOT NULL AUTO_INCREMENT,
                name varchar(50),
                email varchar(50),
                info varchar(500),
                PRIMARY KEY (ID)
                )";           
                  mysqli_query($conn , $sql1);
                 $sql = "INSERT INTO contact(name,email,info) VALUES('$name','$email','$info')";
            
                   mysqli_query($conn , $sql);
           
                   echo"
                   <script>
                    alert('Sent Successfully');            
                  </script> ";
           
              }
        
    }
    else
    {
    echo "All field are Required";
    die();
   }
 
?>