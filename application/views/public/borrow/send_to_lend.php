<?php  session_start();
 error_reporting();
 require('../confg/db.php');
 extract($_GET);
 $bid=$_SESSION['id1'];
  $sel=mysqli_query($conn,"insert into request_borr_to_lean values('','$bid','$id') ");
   if($sel)
    {
            echo '<script type="text/javascript">';
            echo 'window.location.href="index.php";';
            echo "
              alert('request is send!!');";
            echo '</script>';
         }
    ?>

     