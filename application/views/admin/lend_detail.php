      <h3 class="box-title">lend detail </h3>
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
                    <th>lender Name</th>
                    <th> Breif detail lend </th>
                    <th>Wallet</th>
                 
                     
                      <th>Request</th>
                    
                  </tr>
                  </thead>

                  <?php $sel="select  * from  borrow_user where user_type=2";?>

                        <?php $mysql_sel=mysqli_query($conn,$sel);
                               
                        ?>
                      <tbody><?php
                        

                          while($rowss=mysqli_fetch_array($mysql_sel))
                         { 
                            $b_id=$rowss['id'];
                            $sel_addr="select * from lend_detail where lend_id='$b_id' ";
                            $mysql_s=mysqli_query($conn,$sel_addr);
                            $rowsss=mysqli_fetch_array($mysql_s);
                             
//                            echo $id;
                          ?> <?php  $sel_reu1=mysqli_query($conn,"select *  from request where user_id='$b_id' and active_request=1 ");

  //                           $rowsss1=mysqli_fetch_array($sel_reu);
                         // echo $rowsss1['c']."wet4";

                          
                            ?>

           
                  <tr>
                    <td><?php

                       if($rowsss['image']=="")
                    {
                      $img="../borrow/dist/img/avatar5.png";

                    }else{

                      $img=$rowsss['image'];

                    }
                     echo "<img src='".$img."' class='img-circle' alt='User Image' width='10%' height='10%'>";
                      echo "<br/>";
                     
                      echo $rowss['user_name']; ?></td>
                    <td><a href="pages/examples/detail_borrow.php"><?php echo $rowss['user_address'];?></a></td>
                     <td><span class="label label-success"><?php  

                      if(!empty($rowsss['lend_wallet']))
                     {
                     
                         echo $rowsss['lend_wallet'];
                     
                     }
                      else{
                     echo "mention not at yet!";

                   }?></span></td>
                  <?php if(mysqli_num_rows($sel_reu1)<1)
                              { ?>
                      <td><a href="accept_request.php?add=borr&id=<?php echo $rowss['id'];?>"><span class="label label-success">request  accept</span></a>/<a href="cancle_request.php?id=<?php echo $rowss['id'];?>"><span class="label label-success">cancle request</span></a></td>
                      <?php }else{
?>

        <td><a href="#"><span class="label label-success"> accepted</span></a>
<?php
                      }
     ?>             </tr>
                   <?php 
                } 

                ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
   