<?php session_start();
 error_reporting();
 require('../confg/db.php');

  if(!isset($_SESSION['id1'])|| empty($_SESSION['id1']))
  {  


     header('location:../temp/site/login.php');


  }
  
 ?>
<?php include('header.php');?>  <!-- Left side column. contains the logo and sidebar -->
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
  if(isset($sub111))
  {
     
      $sel_equ="insert into  employ_detail   values('','$id','$c_name','$position','$joined_date','$left_date','$current_salary','$self_employ')";
      $mysql=mysqli_query($conn,$sel_equ);
      if($mysql)
      {
      
            echo "<script>

                alert('your detail is succesfully inserted!!!');
                window.location.href='index.php';

            </script>";
      }else{
      	//echo "efwew";
        echo "there is some problem !!";
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
<h2>Employement  detail </h2>
<form method="POST" id="bor_dd" enctype="multipart/form-data">

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">company name</span>
  <input type='text' class="form-control"   name='c_name' placeholder="company name">
  </div>
  <br/>
  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">position </span>
   <input type='text' name="position" class="form-control" placeholder="position">
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">
      Joined the company :Date

  </span>
  <div class='input-group date' id='datet'>
                <input type='text' class="form-control" name="joined_date" placeholder="MM-YYYY"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>

   </div>
<br/>
  <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">left the company :Date</span>
   <input type='text' name="left_date" class="form-control" placeholder="left the company :date">
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">current salary </span>
   <input type='text' name="current salary" class="form-control" placeholder="current salary  ">
   </div>
<br/>

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">if self employed income</span>
   <input type='text' name="self_employ" class="form-control" placeholder="self employed ">
   </div>
<br/>
 <div style='text-align:center;'>
  <input type='submit' name='sub111' value="add detail "  class="btn btn-success btn-sm">
</div>

</form>

<br/>
 <!--came from ajax -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>

  
    </div>
  </div>
 <!-- /.content -->
  </div>
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

    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
<script type="text/javascript" src="../js/bootstrapValidator.min.js"/></script>
<script src="fetch_table_data.js"></script>
 <script type="text/javascript">
        $(function () {
            $('#datet').datetimepicker({
                viewMode: 'years',
                format: 'MM/YYYY'
            });
        });
    </script>
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
</body>
</html>
