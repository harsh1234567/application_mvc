<?php  require('../confg/db.php');
    

  if(isset($_GET['add']) && ($_GET['add']=='borr'))
  {
   
     $id=  $_GET['id'];
    // echo $id;
     $sel_name="select * from borrow_user bu, borrow_detail  bd where bu.id='$id' and bu.id=bd.borrower_id";
     $mysql=mysqli_query($conn,$sel_name);
     $rows=mysqli_fetch_array($mysql);
     $uname=$rows['user_name'];
     $type=$rows['user_type'];
      $demand=$rows['bor_demand'];
     if($type==1)
     {
      $t='borr';

     }else if($type==2){

     $t='lend';


     }else{

        $t='';
     }
       
     //   $sel_amount="select bor_demand  as d from borrow_detail  where borrower_id='$id'";
   // $mysql_amu=mysqli_query($conn,$sel_amount);
    //$rows_a=mysqli_fetch_array($mysql_amu);
       
     //have to change in future 

        $detail=$rows['user_address'];
        $r=time();
        $time=strtotime($r);
       $sel="insert into request (user_id,user_name,active_request,borrow_amount,detail_user,type,acvt_date,add_time) values('$id','$uname','1','$demand','$detail','$t',NOW(),'$time')";
     
       $mysql_query1=mysqli_query($conn,$sel);
       if($mysql_query1)
       {      
        
         $msg_to="your account have been verified!!";
         $noti_borr=mysqli_query($conn,"insert into notification values('','$id','$msg_to','admin')");
         if($noti_borr)
         {
            echo '<script type="text/javascript">';
            echo 'window.location.href="home.php?option=borrow";';
            echo "
              alert('request is accepted');";
            echo '</script>';
         }else{

            echo "noti errro";
         }
     }
    else{
     echo "error!!!";
    }
}

  if(isset($_GET['add']) && ($_GET['add']=='lend'))
  {
   
     $id=  $_GET['id'];
    // echo $id;
     $sel_name="select * from borrow_user bu, borrow_detail  bd where bu.id='$id' and bu.id=bd.borrower_id";
     $mysql=mysqli_query($conn,$sel_name);
     $rows=mysqli_fetch_array($mysql);
     $uname=$rows['user_name'];
     $type=$rows['user_type'];
      $demand=$rows['bor_demand'];
     if($type==1)
     {
      $t='borr';

     }else if($type==2){

     $t='lend';


     }else{

        $t='';
     }
       
     //   $sel_amount="select bor_demand  as d from borrow_detail  where borrower_id='$id'";
   // $mysql_amu=mysqli_query($conn,$sel_amount);
    //$rows_a=mysqli_fetch_array($mysql_amu);
       
     //have to change in future 

        $detail=$rows['user_address'];
        $r=time();
        $time=strtotime($r);
       $sel="insert into request (user_id,user_name,active_request,borrow_amount,detail_user,type,acvt_date,add_time) values('$id','$uname','1','$demand','$detail','$t',NOW(),'$time')";
     
       $mysql_query1=mysqli_query($conn,$sel);
       if($mysql_query1)
       {      
        
         $msg_to="your account have been verified!!";
         $noti_borr=mysqli_query($conn,"insert into notification values('','$id','$msg_to','admin')");
         if($noti_borr)
         {
            echo '<script type="text/javascript">';
            echo 'window.location.href="home.php";';
            echo "
              alert('request is accepted');";
            echo '</script>';
         }else{

            echo "noti errro";
         }
     }
    else{
     echo "error!!!";
    }
}


?>