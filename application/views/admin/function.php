<?php    
     $id=$_SESSION['id'];
     $mysql="select * from admin where id='$id'";
     $sel_admin=mysqli_query($conn,$mysql); 
     $rows=mysqli_fetch_array($sel_admin);
     
      $email=$rows['email'];
      $name='';
     for($i=0;$i<strlen($email);$i++)
     {
     if($email[$i]=='@')
     {
       break;
     }else{

     	  $name.=$email[$i];   
     
       } 
     }
//  echo $name;
?>