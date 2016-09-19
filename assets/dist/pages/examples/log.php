<?php session_start();
require('../../confg/db.php');
   extract($_POST);
   if(isset($email) &&(!empty($email)))
   { 
    
     $sel="select * from admin where email='$email' and password='$pass'";
     $mysql=mysqli_query($conn,$sel);
     if($mysql)
     {
           if(mysqli_num_rows($mysql)==1)
          {
          	$rows=mysqli_fetch_array($mysql);
          	$_SESSINO['id']=$rows[0];
         
          echo "<script>
    
                window.location.href='../../index.php';
      </script>";
        }
  
     }











































































     ;

   }
 


?>