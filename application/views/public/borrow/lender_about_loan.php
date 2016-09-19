<?php $mysql="select * from request where type='lend'";
    $mysqll=mysqli_query($conn,$mysql);
   $i=1; ?>

        
  <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">lender requests</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">

                <tr>
                  <th>ID</th>
                  <th>User name</th>
                  <th>activate date</th>
                  <th>user detail</th>
                  <th>rating </th>
                  <th>request for loan </th>
                </tr>
   <?php  while($rowss=mysqli_fetch_array($mysqll))
          {
  ?>           
                <tr>
                  <td><?php echo $i++;?></td>
                   <td><?php echo $rowss['user_name'];?></td>
                   <td><?php echo $rowss['acvt_date'];?></td>
                   <td><?php echo $rowss['detail_user'];?></td>
                   <td><<?php 
                     if($rowss['rating']==0)
                     { 
                      	$t="span class='label label-danger'>there is no rating for this user, bcoz this is new user</span>";
                     }
                     else{
                     	 $t="span class='label label-success'>".$rowss['rating']."%</span>";
                     }
                     echo $t; ?></td>
                  <td>
                  <?php 
                  
                   $sel1 = mysqli_query($conn,"select * from request_borr_to_lean where lean_id='".$rowss['user_id']."'");
                   if(mysqli_num_rows($sel1)<=0)
                   {
                     ?>
                      <a href="send_to_lend.php?id=<?php echo $rowss['user_id'];?>"><span class="label label-success">request for loan</a></span></td>
                   <?php }else{
                     ?>
                   <span class="label label-primary">request is sent</span></td>
                  
                    <?php

                   }?>
                   </tr>
    
     
<?php
     } 
     ?>
               </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  