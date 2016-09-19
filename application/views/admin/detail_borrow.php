<?php session_start();
 //$id=$_SESSION['id'];
include('../confg/db.php');
extract($_POST);
$id=$_GET['id'];

                            $sel_addr="select * from borrow_detail bd, borrow_user bu ,educatation_detail ed_d ,employ_detail e_d  where bd.borrower_id='$id' and bu.id=bd.borrower_id and ed_d.borr_id=bd.borrower_id and e_d.borr_id=bd.borrower_id ";
                            $mysql_s=mysqli_query($conn,$sel_addr);
                            $rowsss=mysqli_fetch_array($mysql_s);

               

include('detail_user_borrow.php');
include('function.php');
?>
<?php include('header.php');

?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
          User detail 
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
 
<?php 
  if(mysqli_num_rows($mysql_s)>0)
    {
?>     
     <h2>genernal information</h2>  <div class="row invoice-info">
          
        <div class="col-sm-4 invoice-col">
          
          From
          <address>
            <span class="glyphicon glyphicon-address"></span> <strong><?php echo $rowsss['user_address'];?></strong><br/>
            
           <span class="glyphicon glyphicon-phone"></span> <?php echo $rowsss['phn'];?><br>
            
            <span class="glyphicon glyphicon-envelope"></span>&nbsp;<?php echo $rowsss['user_email'];?><br>
            <span class="glyphicon glyphicon-calendar"></span>&nbsp;<?php echo $rowsss['user_dob'];?><br>
          
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        
        <?php if($rowsss['image']!='')
        {
?>
            <img src="<?php echo $rowsss['image']; ?>" width="100px" height="100px" class='img-thumbnail'/>

  <?php        }else{

?>
          <img src="borrow/dist/img/avatar5.png"  width="100px" height="100px" class='img-thumbnail'/>
      

    <?php
    }?>
    <br/>
    <strong>Activate time:</strong><?php echo $rowsss['avt_date'];  ?>
    
       </div>

        <!-- /.col -->
      </div>
    <h2>Borrow Brief detail</h2>
       
      <div class="row invoice-info">
          
        <div class="col-sm-4 invoice-col">
         
            pan card no:&nbsp;<?php echo $rowsss['pan_no'];?><br/>
            
            Account no&nbsp; <?php echo $rowsss['account_no'];?><br>
            
          Bor demand&nbsp;<?php echo $rowsss['bor_demand'];?><br>
           Time for loan&nbsp;<?php echo $rowsss['add_time'];?><br>
   
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          purpose loan:&nbsp;<strong><?php echo $rowsss['add_purpose'];?></strong><br>
            Salary&nbsp;<?php echo $rowsss['salary'];?><br>
            other income&nbsp;<?php echo $rowsss['other_income'];?><br>
            Rent house&nbsp;<?php echo $rowsss['rent_house'];?><br>
         
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Transport:&nbsp;<strong><?php echo $rowsss['transport'];?></strong><br>
            food &nbsp;<?php echo $rowsss['food_e'];?><br>
           Bank account&nbsp;<?php echo $rowsss['bank_account'];?><br>
        
        
       
   
       </div>

        <!-- /.col -->
      </div>

<h2>Education detail </h2>
    <div class="row invoice-info">
          
        <div class="col-sm-4 invoice-col">
          <h3>School detail </h3>
            
            School name:&nbsp;<?php echo $rowsss['school_name'];?><br/>
            
            Start date:&nbsp; <?php echo $rowsss['start_year'];?><br>
            
         End date:&nbsp;<?php echo $rowsss['end_year'];?><br>
         
   
        </div>
        <!-- /.col -->
         
           <div class="col-sm-4 invoice-col">
            <h3>College detail </h3>
            college name:&nbsp;<?php echo $rowsss['college_name'];?><br/>
            
            Start date :&nbsp; <?php echo $rowsss['start_year_c'];?><br>
            
           End date;&nbsp;<?php echo $rowsss['end_year_c'];?><br>

           Degree:&nbsp;<?php echo $rowsss['degree'];?><br>
               
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        
        
       
   
       </div>

        <!-- /.col -->
      </div>

<h2>Employ detail </h2>
    <div class="row invoice-info">
          
        <div class="col-sm-4 invoice-col">
                     
           Company name:&nbsp;<?php echo $rowsss['c_name'];?><br/>
            
           Position:&nbsp; <?php echo $rowsss['pos'];?><br>
            
        joined date:&nbsp;<?php echo $rowsss['joined_d'];?><br>
         
         Left date:&nbsp;<?php echo $rowsss['left_d'];?><br>
           
        Salary:&nbsp;inc <?php echo $rowsss['c_salary'];?><br>

         Self employ:&nbsp;inc <?php echo $rowsss['self_e'];?><br>
        
        </div>
        <!-- /.col -->
         
           <div class="col-sm-4 invoice-col">
           
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        
        
       
   
       </div>

        <!-- /.col -->
      </div>
    

    <?php     }
        else{
          echo "<font color='red'>result is not present!!</font>";
         }
      ?>
      <!-- /.row -->
    


      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer no-print">
    <div class="pull-right hidden-xs">
    </div>
    </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
