<?php require('../confg/db.php');
extract($_POST);
  $sel="delete from borrow_detail where b_w_id='".$del."'";
  $mysql1=mysqli_query($conn,$sel);
  if($mysql1)
  {
    // echo $del;
  echo "your detail is deleted!!";

      header('location:ndex.php');

  }
  else{

  	echo "error!";
  }//echo $_GET['del'];

?>