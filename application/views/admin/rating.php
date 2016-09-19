<?php session_start();
require('../confg/db.php');

if(!isset($_SESSION['id']))
{
 
  header('location:index.php');

}

extract($_GET);

include('function.php');

?>
<?php 
  if(isset($_POST['submit']))
  {
    $id1=$_GET['id'];
    $mysql1="update request set rating='".$_POST['rate']."' where user_id='$id1'";
    $mysql1=mysqli_query($conn,$mysql1);
    if($mysql1)
    {
    
     echo "<script>alert('rating is added');
       </script>";
    }
  }
?>
<?php include('header.php'); ?>

               
   

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 
  <!-- /.content-wrapper -->
<?php include('footer.php');?>