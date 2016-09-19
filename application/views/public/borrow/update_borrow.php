<?php require('../confg/db.php');?>
  <?php 
      extract($_POST);
    //  require('../../confg/db.php');
   //  echo $_SESSION['id1'];

       $mysql=mysqli_query($conn,"select * from borrow_user where id='$id'");
       $rowsss=mysqli_fetch_array($mysql);
       $borr_name=$rowsss['user_name'];
       
       if(isset($u_sub))
     {   
      $mysql="update borrow_detail set pan_no='$u_pan',account_no='$u_account' ,bor_demand='$u_bor_demand' where borrower_id='$id'";
      $mysqll=mysqli_query($conn,$mysql);
       if($mysqll)
       {
        echo "<script>alert('your data is updated ');
                 window.location.href='index.php';
        </script>";
      


       }else{

          echo "scetre";
       }
     }
     
   
?>
 <h3>Update detail 
</h3>

<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-4">
<?php 
      
     $mysql="select * from borrow_detail where borrower_id='$id'";

       $mysql_b_d=mysqli_query($conn,$mysql);
       $rowwss=mysqli_fetch_array($mysql_b_d);
   
     ?>
<form method="POST">
  <input type='number' class="form-control"   name='u_pan' placeholder="pan card no " value="<?php echo $rowwss['3'];?>">
  <br/>
   <input type='number' name='u_account' class="form-control" placeholder="account no " value="<?php echo $rowwss['4'];?>">
<br/>
   <input type='number' class="form-control" name='u_bor_demand' placeholder="borrow demand " value="<?php echo $rowwss['5'];?>">
<br/>
  <input type='submit' name='u_sub' value="add detail "  class="btn btn-success btn-sm">
  

</form>
</div>
</div>