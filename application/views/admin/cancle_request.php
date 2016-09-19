<?php  require('../confg/db.php');
    
$id=  $_GET['id'];
//echo $id;
     $sel_name="select user_name as n from borrow_user where id='$id'";
     $mysql=mysqli_query($conn,$sel_name);
     $rows=mysqli_fetch_array($mysql);
     $uname=$rows['n'];
     $sel_amount="select bor_demand  as d from borrow_detail where borrower_id='$id'";
      $mysql_amu=mysqli_query($conn,$sel_amount);
     $rows_a=mysqli_fetch_array($mysql_amu);
     $demand=$rows_a['d'];
     //have to change in future 
      $sel_amount1="select *  from borrow_user where id='$id'";
      $mysql_amu1=mysqli_query($conn,$sel_amount1);
     $rows_a1=mysqli_fetch_array($mysql_amu1);
     $detail=$rows_a1['user_address'];
     
     $sel="insert into request values('','$id','$uname','','0','$demand','$detail','','borr')";
     $mysql_query1=mysqli_query($conn,$sel);
     
     if($mysql_query1)
    {    
   


       echo '<script type="text/javascript">';
      echo 'window.location.href="home.php?option=borrow";';
       echo "
           alert('request is cancle');";
       echo '</script>';
 
     

    }


?>