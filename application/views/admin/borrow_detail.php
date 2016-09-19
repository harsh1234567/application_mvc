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
                  
                     
                      <th>Request</th>
                    
                  </tr>
                  </thead>

                  <?php $sel="select * from  borrow_user bu  where bu.user_type=1 " ;?>
                        <?php $mysql_sel=mysqli_query($conn,$sel);
                               
                        ?>
                  <tbody><?php
                         while($rowss=mysqli_fetch_array($mysql_sel))
                         { 
                            $b_id=$rowss['id'];
                            //echo $b_id;
                          
                          ?>
                         <?php

                             $sel_req="select * from request where user_id='".$b_id."' and active_request=1 and type='borr'";
                              $mysql=mysqli_query($conn,$sel_req);
                           
                         ?>
           
                  <tr>
                    <td><?php 
                    if($rowss['image']=="")
                    {
                      $img="../borrow/dist/img/avatar5.png";

                    }else{

                      $img=$rowss['image'];

                    }
                     echo "<img src='".$img."' class='img-circle' alt='User Image' width='10%' height='10%'>";
                      echo "<br/>";
                      echo $rowss['user_name']; ?></td>
                     <td><a href="detail_borrow.php?id=<?php echo $b_id;?>"><?php echo $rowss['user_address'];?></a></td>
                     <td><span class="label label-primary"><?php 
                  //   echo $rowss['bor_demand'];
                     if(!empty($rowsss['bor_demand']))
                     {
                     
                      echo $rowsss['bor_demand'];
                     
                     }
                     else{
  
                        echo "not mentioned at yet ";

                      }
                     


                    ?></span></td>   <?php if(mysqli_num_rows($mysql)<=0)
                             {
                               $sel_detail=mysqli_query($conn,"select * from  borrow_user bu , borrow_detail bd  where bu.user_type=1 and bu.id=bd.borrower_id");
                              if(mysqli_num_rows($sel_detail)>0)
                               {
                                $sel1=mysqli_query($conn,"select * from  borrow_detail where borrower_id='".$rowss['id']."'");
                                if(mysqli_num_rows($sel1)>0)
                                {
                               ?>
                              <td><a href="accept_request.php?add=borr&id=<?php  echo $rowss['id'];?>"><span class="label  label-success">request accept</span></a>/
                             <a href="cancle_request.php?id=<?php echo $rowss['id'];?>"><span class="label label-success">cancle request</span></a></td>
                     <?php 
                   
                   }else{


                    echo "<td class='text-danger'>Borrow demand not mention !!</td>";

                   }} else{

                      ?>
                             <td><span class="label label-danger">User detail incompelete!!</span></td>
                       <?php 
                         }
                          }
                          else{
                      
    ?>
        <td><a href="#"><span class="label label-success"> accepted</span></a>
                      
     <?php
        }  echo "</tr>";   
  

         } 

                ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
   