 <?php   
            $sel=mysqli_query($conn,"select * from borrow_user where id='$id'");
            $rows=mysqli_fetch_array($sel);
             $img= $rows['image'];
           //  echo mysqli_num_rows($sel);
              // echo $img."gfdr";
         //   echo $img."kjvgrg";
                 if($img=="")
                 {

 
                       
                 ?>

                <img src="dist/img/avatar5.png" class="img-circle " alt="User Image">

                 <?php                  
                 }
                 else{

                ?>
                <img src="<?php echo $img;?>" class="img-circle" alt="User Image">

               
               <?php  }
                 ?>