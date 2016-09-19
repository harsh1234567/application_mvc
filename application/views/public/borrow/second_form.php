<?php session_start();
 error_reporting();
 require('../confg/db.php');

  if(!isset($_SESSION['id1'])|| empty($_SESSION['id1']))
  {  


     header('location:../temp/site/login.php');


  }
  
 ?>
<?php include('header.php');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('side_header.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

               <?php

                $option = isset($_REQUEST['option'])==TRUE?$_REQUEST['option']:"";
                  // / echo $option;
                 //   echo $option;
                   ?>

<?php// $sel_for_detail ="select count(*) as c from borrow_detail where borrower_id='$id'";
   //$mysql_check=mysqli_query($conn,$sel_for_detail);
  // $rows_c=mysqli_fetch_array($mysql_check);
  
?>

<?php

      extract($_POST);
  if(isset($sub11))
  {
     
      $sel_equ="insert into  educatation_detail  values('','$id','$school_n','$Start_year','$end_year','$college_n','$start_year_c','$end_year_c','$degree')";
      $mysql=mysqli_query($conn,$sel_equ);
      if($mysql)
      {
      
            echo "<script>

             alert('your detail is succesfully inserted!!!');
             window.location.href='third_form.php';

            </script>";
      }else{
      	echo "error";
      }

  }
?>
<div class='row'>
 <div class='col-md-2'></div>
 <div class='col-md-8'>
<div class='box box-danger'>
  <div class="box-body">
 <div class='row'>
<div class='col-md-2'></div>
<div class='col-md-6'>
<h2>Educational background detail </h2>
<form method="POST" id="bor_dd1" enctype="multipart/form-data">
<h3>school detail </h3>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">School name (10+2)</span>
  <input type='text' class="form-control"   name='school_n' placeholder="school name">
  </div>
  <br/>
  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Start year</span>
   <input type='text' name="Start_year" class="form-control" placeholder="start year ">
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">
       End year

  </span>
   <input type='text' class="form-control" name="end_year" placeholder="end year">
   </div>
<br/>
  <h3>college detail</h3>
  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">college</span>
   <input type='text' name="college_n" class="form-control" placeholder="college">
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">start year</span>
   <input type='text' name="start_year_c" class="form-control" placeholder="rent on house ">
   </div>
<br/>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">end year </span>
   <input type='text' name="end_year_c" class="form-control" placeholder="end year ">
   </div>
<br/>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">degree </span>
   <input type='text' name="degree" class="form-control" placeholder="degree ">
   </div>
<br/>
  <input type='submit' name='sub11' value="add detail "  class="btn btn-success btn-sm">
  

</form>

<br/>
 <!--came from ajax -->


  </div>
  </div>
    </div>
  </div>
 <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
</div>
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

<script type="text/javascript" src="../js/bootstrapValidator.min.js"/></script>
<script src="fetch_table_data.js"></script>
<script>
 $(document).ready(function() 
 {
         $("#data1").hide();
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
                 $("#data1").show();
                 $("#data1").html(data);
                
             }


          });
          
   });



 });
</script>
<script>
	  $(document).ready(function() 
 {
 
     function cal_me()
     {

       var url="fetch_account.php";
          // alert("fwer");
          $.ajax({
             type:"POST",
             url:url,
             cache:false,
             success:function(data){
                
               $("#fetch_account").html(data);


             }
            });
      
      }


      setInterval(cal_me,1000);


          });
          



</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#bor_dd1').bootstrapValidator({
            message: 'This value is not valid',
            container: 'tooltip',
            feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
                 school_n: {
                   validators: {
                         notEmpty: {
                          message: 'The school name is required and cannot be empty'
                              }
               
                           }
                      }
                  } 
     });
      });


</script>

</body>
</html>
