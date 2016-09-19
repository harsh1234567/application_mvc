   
           <h3 class="box-title">Borrow detail </h3>
                
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Borrow Name</th>
                    <th> Breif detail borrow </th>
                    <th>Borrow Amount</th>
                   <th>Add time</th>
                     
                      <th>Request</th>
                    
                  </tr>
                  </thead>

                  <?php $sel="select  * from  borrow_detail ";?>
                        <?php $mysql_sel=mysqli_query($conn,$sel);
                               
                        ?>
                  <tbody><?php
                 // echo "eryt";
                  
                                           while($rowss=mysqli_fetch_array($mysql_sel))
                         { 
                            $b_id=$rowss['borrower_id'];
                             $sel_addr="select  * from borrow_user where id='$b_id'";
                            $mysql_s=mysqli_query($conn,$sel_addr);
                            $rowsss=mysqli_fetch_array($mysql_s);
                                  
                          ?>
                          <?php  $sel_reu=mysqli_query($conn,"select *  from request where user_id='$id'  ");

                             $rowsss1=mysqli_fetch_array($sel_reu);
                         // echo $rowsss1['c']."wet4";

                           if(mysqli_num_rows($rowsss1)<1)
                           {
                            ?>

           
                  <tr>
                    <td><?php 
                   echo "fet";
                      if($rowsss['image']=="")
                    {
  

                         $img="../borrow/dist/img/avatar5.png";

                    }else{

                      $img=$rowsss['image'];

                    }
                     echo "<img src='".$img."' class='img-circle' alt='User Image' width='10%' height='10%'>";
                      echo "<br/>";
                      echo $rowsss['user_name']; ?></td>
                    <td><a href="pages/examples/detail_borrow.php"><?php echo $rowsss['user_address'];?></a></td>
                     <td><span class="label label-success"><?php  echo $rowss['bor_demand'];?></span></td>
                         <td><a href="cancle_request.php?id=<?php echo $rowsss['id'];?>"><span class="label label-primary">Add expire time </span></a></td>
                  
                      <td><a href="accept_request.php?id=<?php echo $rowsss['id'];?>"><span class="label label-success">request  accept</span></a>/<a href="cancle_request.php?id=<?php echo $rowsss['id'];?>"><span class="label label-success">cancle request</span></a></td>
                      
                  </tr>
                   <?php 
                } else{
                  

                }}

                ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
   