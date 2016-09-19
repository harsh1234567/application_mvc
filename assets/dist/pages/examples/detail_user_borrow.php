<?php require('../../../confg/db.php');

extract($_POST);

extract($_GET);
 if(!empty($id) )
 {
     /// $set="select * from borrow_detail where id='$id'";
   $sel="select * from borrow_user where id='$id'";
   $mysql=mysqli_query($conn,$sel);
   if($mysql)
   {
    
     $rowss_user=mysqli_fetch_array($mysql);  

   }
 }







?>