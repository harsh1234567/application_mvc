<?php 
session_start();
 error_reporting();
$id=$_SESSION['id1'];
require('../confg/db.php');

  include('header.php'); 
  include('side_header.php');?>    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
       

        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-danger">
            <div class="box-body box-profile">
              
    <div class="row">
        <div class="col-md-12">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>upoad image</h4>
                    <p>
        
                     <button  class="label label-danger" rel="tooltip" title="Zoom">delete</button>
                     <button class="label label-success" rel="tooltip" title="upload" id="image" >upload</button>
                  </p>

                  
                </div> <?php 

  include('image.php'); 
        
             // image();?>
            </div>
            </div>
      </div>
  
              <h3 class="profile-username text-center"><?php

                    echo $borr_name;

              ?></h3>
               <?php 
                     $sel=mysqli_query($conn,"select * from request where user_id='$id'");

                    $rowss_rate=mysqli_fetch_array($sel);
                    $count=mysqli_num_rows($sel);

                    if($count>0)
                     {
                      echo "<strong>rating by sunshine :</strong>".$rowss_rate['rating'];

                     }else
                     {?>
              <p class="text-muted text-center">Software Engineer</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                 <strong>rating by sunshine :</strong><?php
                     
                        echo "your rating has not been decided";

                     }
                  ?>
                    
                
                </li>
               
                <li class="list-group-item">
                  <b>loan request</b> <a class="pull-right">10</a>
                </li>
              </ul>

              <a href="#" class="btn btn-danger btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
              <p class="text-muted">
                   <?php
                //select for education detail 
                   //echo $id;
                    $sel1=mysqli_query($conn,"select * from educatation_detail  where borr_id='$id'");
                    $rowss=mysqli_fetch_array($sel1);
                  
                  if(mysqli_num_rows($sel1)<1)                  {
                    
                    echo "<h4>NO detail added!!</h4>";
 

                  }else{  ?>  
                  
                  <h4>School detail </h4>
                  school name :<?php echo $rowss[2]; ?><br/>
                  school start year :<?php echo $rowss[3]; ?><br/>
                  school end year :<?php echo $rowss[4]; ?><br/>
                  <?php }
          
                  ?>       

			 </p><a href="profile.php?option=edit" data-toggle="tooltip" data-placement="top" title="Edit"><span class='glyphicon glyphicon-edit'></span>

</a>
              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
<?php
                               $sel=mysqli_query($conn,"select * from borrow_user  where id='$id'");
                    $rowss1=mysqli_fetch_array($sel);     

?>
              <p class="text-muted"><?php 
              
                                echo $rowss1['user_address'];
              


                ?></p>
               
           <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
<?php
                               $sel1=mysqli_query($conn,"select * from borrow_detail  where borrower_id='$id'");
                               $rowss11=mysqli_fetch_array($sel1);     
                    
?>
<p class="text-muted"><?php 
if(mysqli_num_rows($sel1)>0)
{
      echo $rowss11['pan_no']."<br/>";

      echo $rowss11['account_no']."<br/>";
      echo $rowss11['bor_demand']."<br/>";
      echo $rowss11['salary']."<br/>";
      echo $rowss11['other_income']."<br/>";
      echo $rowss11['rent_house']."<br/>";
      echo $rowss11['transport']."<br/>";
      echo $rowss11['food_e']."<br/>";
 }else{

    echo "your detail has not been inserted!!";

  } ?></p>

              

           <!--                      <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">python</span>
              </p>
-->
              <hr>

             <!-- <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
           --> </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                   <?php
                          $option = isset($_REQUEST['option'])==TRUE?$_REQUEST['option']:"";
                       if($option=" ")
                       {
     

                       }elseif($option='edit'){
   

                            include('edit.php');

                       }


                   ?>
              </div>
        
      <div class="row">
        <div class="col-md-12">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                
                </button>
               
              </div>

              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-there is no body->
        
              
<!-- Modal -->
<div id="upload">
     <form  method="post" enctype="multipart/form-data" action="ajax1.php">
     <div class="row">
      <div class="col-md-4">
    <div class="form-group">
     <label for="image">Image upload:</label>
     <input type="file" class="form-control" name="fileToUpload"   id="file">
   </div>
    <input type="submit" name="submit" class="btn btn-warning" value="submit"/>
 </div>
</div>
</form>
</div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>
      <!-- /.row -->




                 
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
     <?php

     $data = array();
if( isset( $_POST['submit'] ) && !empty( $_POST['g'] )){
  
  
  
echo $_POST['g'];

    
  }
  

  ?>
  

  <!-- /.content-wrapper -->
  <footer class="main-footer">
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
<script>
$('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
</script>
<script>
    $(document).ready(function(){
   $("#upload").hide();
       $("#image").click(function(){

         $("#upload").toggle();
         
       });

});
</script>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
