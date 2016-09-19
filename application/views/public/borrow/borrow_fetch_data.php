<?php session_start();
error_reporting(0);
     
 require('../confg/db.php');
 $id=$_SESSION['id1'];
 //echo $id;
         $mysql="select * from borrow_detail where borrower_id='$id'";
         $mysql_b_d=mysqli_query($conn,$mysql);
         $rowwss=mysqli_fetch_array($mysql_b_d);
           
     ?>
     
      

     <?php 
      
         if(mysqli_num_rows($mysql_b_d)>0)
         {
       ?>
      <th scope="row">1</th>
      <td><?php echo $rowwss[1]; ?></td>
      <td><?php echo $rowwss[3];  ?></td>
      <td><?php echo $rowwss[4]; ?></td>
      <td><?php echo $rowwss[5]; ?></td>

      <td><?php echo $rowwss[6]; ?></td>
      <td><?php echo $rowwss[7];  ?></td>
      <td><?php echo $rowwss[8]; ?></td>
      <td><?php echo $rowwss[9]; ?></td>
      <td><?php echo $rowwss[10]; ?></td>
      <td><?php echo $rowwss[11];  ?></td>
      <td><?php echo $rowwss[12]; ?></td>
      
      <td><a href="index.php?option=update_borrow" class='btn btn-info btn-sm '>Update detail </a>--
      <input type="hidden" id="del_v" value="<?php echo  $rowwss[0];?>" />
      <button id="del" class=' btn btn-danger btn-sm'>Delete detail </button></td>
       
     <?php }else{
     
             echo "<td ><strong class='text-danger'>your data has not been inserted!!</strong></td>";

     	} 


   ?>


   <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
 <script> 
   
 $(document).ready(function() 
 { 
  
   $("#del").click(function()
   {




    var del1=$("#del_v").val();
    var msg1="del="+del1;
    var url="delete.php";
          // alert("fwer");

          $.ajax({
             type:"POST",
             url:url,
             data:msg1,
             cache:false,
             success:function(data){
                 alert(data);

             }

   
          });
   
   
   });



 });
</script>
