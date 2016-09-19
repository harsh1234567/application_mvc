<?php session_start();
require('../confg/db.php');
 
 $id=$_SESSION['id1'];

?>
               <?php

                $option = isset($_REQUEST['option'])==TRUE?$_REQUEST['option']:"";
                    echo $option;
                    if($option=='update_borrow')
                    {
                      include('update_borrow.php');
                    }else{
                       

         extract($_POST);
        if(isset($sub))
         {   
             echo "frwewr";

           $mysql="insert into borrow_detail values('','$borr_name','$id', '$pan ','$account','".$bor_demand1."')";
           $mysqll=mysqli_query($conn,$mysql);
          }
       
                  include('borrw_detail.php');
                }
 
               ?>
