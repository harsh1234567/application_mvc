<?php session_start();
require('../confg/db.php');
if(!isset($_SESSION['id']))
{
 
  header('location:index.php');

}
include('function.php');

?>

<?php include('header.php');?>

<!---modal for add time -->

  <div id="time" class="modal fade"  role="dialog" aria-hidden="true" style='height:400px; width:600px;'>
        <div class="modal-dialog">
             <div class="clearfix">
             <div class="box box-info">
                 <div class="box-header with-border">
               
        <!-- Modal content-->
         <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <?php 
                //   $id="<p class='fetched-data'></p>";
                //echo $id;
                      //    echo var_dump($id);
             
                     // echo $id;
                     // echo var_dump($id);
                    //echo htmlspecialchars($id);
                      // echo intval($id);
                     // echo strip_tags($id)."fe";
                     // echo $id;
                      // $id1=htmlspecialchars($id);
                     // echo $id1;                       
                      // $sel=mysqli_query($conn,"select * from request where user_id='$id1'");
                      //$rowss=mysqli_fetch_array($sel);

         
   
       ?> 
 
             <h2 class="modal-title">Add time
          <?php //echo $rowss['user_name'];
                 extract($_POST);
                 if(isset($submit11))
                 {
                    
                  $id1= intval($id1);
                 // echo $id1;
                  $time= strtotime($time);
                  $sel=mysqli_query($conn , "update request set add_time='$time' where  user_id='".$id1."'");
                   if($sel)
                   {
                   echo "<script>
                    alert('time is added to the request!!');
                   </script>";
                 }
                }

          ?>
        </h2>
      </div>

      <div class="modal-body">
       <div class="well">
             

            <form method="post">
                  <input type="hidden" name="id1" value='' id="time" />
                    <br/>
                       <div id="datetimepicker3" class="input-append">
                    <input   data-format="yyyy-MM-dd" type="text" name="time"/>
                   <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                  </i>
             </span>
          </div>

      <br/>
  

                   <input type="submit" name="submit11" class="btn btn-success btn-sm" value="Add time" />
      </div>
               
               </form>
  
      </div>
  



            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
       </div>   
    </div>
   </div>
   </div>
   </div>
   </div><!-- Modal -->


<!--test-->
  
<!---test over -->

<div id="myModal" class="modal  fade"  role="dialog" aria-hidden="true" style='height: 400px;width:600px;'>
  <div class="modal-dialog">
    <div class="box box-info">
            <div class="box-header with-border">
         
       <!-- Modal content-->
       <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
              <?php 
                //   $id="<p class='fetched-data'></p>";
                //echo $id;
                      //    echo var_dump($id);
             
                     // echo $id;
                     // echo var_dump($id);
                    //echo htmlspecialchars($id);
                      // echo intval($id);
                     // echo strip_tags($id)."fe";
                     // echo $id;
                      // $id1=htmlspecialchars($id);
                     // echo $id1;                       
                      // $sel=mysqli_query($conn,"select * from request where user_id='$id1'");
                      //$rowss=mysqli_fetch_array($sel);

         
   
       ?> 
 
        <h2 class="modal-title">Rating  
          <?php //echo $rowss['user_name'];
            extract($_POST);
                 if(isset($submit))
                 {

                
                 $id1= intval($id1);
                // echo $id1;
                 $sel=mysqli_query($conn,"select * from request where user_id='$id1'");
                 $rowss=mysqli_fetch_array($sel);
                if($sel==true)
                {
                // / echo $rowss['user_name'];
                 
                 }else{

                  //echo "erwct5";

                 }
                   $sell="update request set rating='$rate1'  where user_id='$id1'";
                     $selll=mysqli_query($conn,$sell);
                     if($sell)
                     {

                   
                      echo "<script>
                   alert('okk rating is done!!');</script>";
                     }
               }

          ?>
        </h2>
      </div>
      <div class="modal-body">
            <form method="post">

              <input type="hidden" name="id1" value='' id="rate" />
                     
                       <select name="rate1" >
                       <option disabled selected value>select value</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                         
                      </select>
                 
                   <br/>
                  <br/>
                 
                   <input type="submit" name="submit" class="btn btn-primary btn-sm" value="rate"/>
               </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</div>
</div>
  </div>
</div>
             <div class="box box-info">
            <div class="box-header with-border">
                  <br/>
                    <br/>

               <?php

                          include('user_accepted_detail.php');
                    

              
               ?>


              </div>
          <!-- /.box -->
        </div>
   </div>
   </div>

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

<?php include('footer.php');?>