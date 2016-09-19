<?php //session_start();
     ///error_reporting();
 //require('../confg/db.php');

  //if(!isset($_SESSION['id1'])|| empty($_SESSION['id1']))
  //{  


    //   header('location:../temp/site/index.php');


  //}
  
 ?>
<?php require('header.php');?>  <!-- Left side column. contains the logo and sidebar -->
 <?php include('side_header.php');?>
  <!-- Content Wrapper. Contains page content --> 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <secti/*on class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
              <?php 
          /*    /* $sel="select * from borrow_user where id='$id' and user_type=1";
               $select_type=mysqli_query($conn,$sel);
               if(mysqli_num_rows($select_type)>0)
               {
                  echo "<h2 style='text-align:center; color:red;'>Hello borrow user!!</h2>";
               }else{

                 echo "<h2 style='text-align:center; color:red;'>Hello Lender user!!</h2>";

               }
              /*?>
               <?php
/*
                 $option = isset($_REQUEST['option'])==TRUE?$_REQUEST['option']:"";
            //       echo $option;
                 //   echo $option;
                    if($option=='update_borrow')
                    {
                      include('update_borrow.php');
                    }
                   
                      else{
                       

         extract($_POST);
        if(isset($sub))
         {   
          
        //  $target_dir = "../uploads/";
      //   $target_file = $target_dir . basename( $_FILES["file"]["b_pdf_format"]);
         
        //    include('file_upload.php');
           
           // $target_file="uploads/" . $_FILES["b_pdf_format"]["name"];
         
         //  $mysql="insert into borrow_detail values('','$borr_name','$id', '$pan ','$account','$p_account','$time_for_loan','$bor_demand1','$salary','$o_income','$rent_o_house','$trans','$Food_e','$b_account','')";
         //  $mysqll=mysqli_query($conn,$mysql);
          //  if($mysqll)
           // {
//               $option='second';
            //   header('location:second_form.php');          
          //  echo "<script>
          //  alert('your information is successfully inserted!!');
              window.location.href='second_form.php';
           // </script>";
           // }

          //}
       */
              ?><div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
<?php 
 
 //$id=$_SESSION['id1'];

?>
<?php/* $sel_for_detail ="select count(*)  as c from borrow_detail bd,educatation_detail ed,employ_detail eed where bd.borrower_id='$id' and bd.borrower_id=ed.borr_id and bd.borrower_id=eed.borr_id";
   $mysql_check=mysqli_query($conn,$sel_for_detail);
   $rows_c=mysqli_fetch_array($mysql_check);
   if($rows_c['c']<=0)
   {*/
?>
<div class='box box-danger'>
 <h4 style='text-align:center;'>General Information</h4> 
   <div class='box-box-body'>
     <div class='row'>
         <div class='col-md-2'></div>
          <div class="col-md-8">

    <form method="POST" id="bor_dd" enctype="multipart/form-data">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">Pan card</span>
      <input type='text' class="form-control"   name='pan' placeholder="pan card no">
      </div>
      <br/>

      <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">account </span>
       <input type='text' name="account" class="form-control" placeholder="account no ">
       </div>

       <br/>
    <h4>Borrow amount for loan</h4>
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">
           $

      </span>
       <input type='text' class="form-control" name="bor_demand1" placeholder="borrow demand ">
       </div>
    <br/>
       <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">Time for loan</span>
       <input type='text' name="time_for_loan" class="form-control" placeholder="account no ">
       </div>
       <br/>
       <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">purpose of loan </span>
       <select name="p_account" class="form-control" >
              <option >purpose</option>
              <option value='1' >home loan</option>
              <option value='2'>car loan</option>
              <option value='3' >education loan</option>
              <option value='4'>personal loan</option>
              <option  value='5'>small business loan</option>
       
       </select>
       </div>
    <br/>
    <p>-------------------------------------------------------------</p>

    <div class="input-group">
      <span class="input-group-addon"  id="basic-addon1" > Home Ownership</span>
       <select  name="home_own" id="home_own" onchange="fetch(this.value);" class="form-control" >
       <option option disable >Home Ownership</option>
       <option values='1'>Rented</option>
       <option values='2'>Owned</option>
       <option values='3'>living with parents</option>

       </select>
       </div>
    <br/><div class="input-group">
      <span class="input-group-addon" id="basic-addon1">salary </span>
       <input type='text'  name="salary" class="form-control"   placeholder="Salary"  >
       </div>
    <br/><div class="input-group">
      <span class="input-group-addon" id="basic-addon1">other income </span>
       <input type='text' name="o_income" class="form-control" placeholder="other income ">
       </div>
    <br/><div class="input-group" id="r_h">
      <span class="input-group-addon" id="basic-addon1">rent on house </span>
       <input type='text' name="rent_o_house"  class="form-control" placeholder="rent on house ">
       </div>
    <br/><div class="input-group">
     <label class="radio-inline"><input type="radio" name="trans" value="two">two vehl</label>
    <label class="radio-inline"><input type="radio" name="trans" value="four">four vehl</label>
       </div>
    <br/><div class="input-group">
      <span class="input-group-addon" id="basic-addon1">food </span>
       <input type='text' name="Food_e" class="form-control" placeholder="Food and other Expenses">
       </div>
    <br/><div class="input-group">
      <span class="input-group-addon" id="basic-addon1">primary bank acnt </span>
       <input type='text' name="b_account" class="form-control" placeholder="primary bank account ">
       </div>
    <br/><div class="input-group">
      <span class="input-group-addon" id="basic-addon1">bank statement in pdf format </span>
       <input type='file' name="b_pdf_format" class="form-control" >
       </div>
    <br/>
    <div style='text-align:center;'>
      <input type='submit' name='sub' value="Add detail  "  class="btn btn-success btn-sm">
     
    </div>
<br/><br/>
    </form>
    </div>
    </div>
 </div>
</div>
<?php 
  /*  }
    else{
//   echo "<strong >your detail is inserted in database ..</strong>";
    include('lender_about_loan.php');
  }*/
   ?></div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#bor_dd').bootstrapValidator({
            message: 'This value is not valid',
            container: 'tooltip',
            feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
               pan: {
                   validators: {
                         notEmpty: {
                          message: 'The pan card number is required and cannot be empty'
                      },
                         regexp: {
                           regexp:/^[A-Z]{5}\d{4}[A-Z]{1}$/,
                           message:'not valid '
                     }
               
  
                   }
               
                },
                 account: {
                    validators: {
                          notEmpty: {
                           message: 'The pan card number is required and cannot be empty'
                    }
               
  
                   }
               
                },
                 bor_demand1: {
                   validators: {
                         notEmpty: {
                          message: 'The pan card number is required and cannot be empty'
                      }
               
  
                   }
               
                },time_for_loan: {
                  validators: {
                          integer: {
                        message: 'The value is not an integer'
                    }
               
  
                   }
               
                },p_account: {
                   validators: {
                         notEmpty: {
                          message: 'The pan card number is required and cannot be empty'
                      }
               
  
                   }
               
                },home_own: {
                   validators: {
                         notEmpty: {
                          message: 'The pan card number is required and cannot be empty'
                      }
               
  
                   }
               
                },salary: {
                   validators: {
                          integer: {
                        message: 'The value is not an integer'
                    }
               
  
                   }
               
                }, 

   }

});
      });


</script>


<script>

 
  //alert("frwfg");
        function fetch(val)
{
//  alert("werwer");
   $.ajax({
     type: 'post',
     url: 'fetch.php',
     data: {
       get_option:val
     },
     success: function (response) {
       // document.getElementById("new_select").innerHTML=response; 
      var get=response;
      if(get=='o' ||get=='l_p')
      {

        $("#r_h").hide();
      }else{

        $("#r_h").show();
      }

     }
   });
}

</script>


 <?php
                

//                }
 
               ?>

<br/>
<!---
   <div id="data1" >


  </div>   
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Show detail </h3>
        </div>
   </div>
   <table class="table">
    <thead class="thead-default">
     <tr>
       <th>#</th>
       <th>Name</th>
       <th>pan no</th>
       <th>account no </th>
       <th>borrow demand </th>
       <th>Home ownership</th>
       <th>Salary</th>
       <th>other income</th>
       <th>rent on house</th>
       <th>vehl</th>
       <th>food </th>
       <th>primary bank account</th>
    </tr>
  </thead>
  <tbody>

<!--came from ajax

   <tr id="fetch_data">
   
   </tr>

   </tbody>
   </table>
   <h2>Educational detail 
   </h2>
  <table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>school name</th>
      <th>Start year</th>
      <th>End Year </th>
      <th>College</th>
      <th>Start Year</th>
      <th>End Year</th>
      <th>Degree</th>
      </tr>
  </thead>
  <tbody>

<!--came from ajax 

  <tr>
  <?php 
     //$mysql1="select * from  educatation_detail  where borr_id='$id'";
       //    $mysql_b_d1=mysqli_query($conn,$mysql1);
         //  $rowwss1=mysqli_fetch_array($mysql_b_d1);
           
    
      ?>
     
      <td scope="row">#</td>
      <td><?php// echo $rowwss1[2]; ?></td>
      <td><?php //echo $rowwss1[3];  ?></td>
      <td><?php //echo $rowwss1[4]; ?></td>
      <td><?php //echo $rowwss1[5]; ?></td>
      <td><?php //echo $rowwss1[6]; ?></td>
      <td><?php //echo $rowwss1[7];  ?></td>
  </tr>
    
  </tbody>
</table>
<h2>Employement detail 
   </h2>
  <table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>company name</th>
      <th>position</th>
      <th>joined Date </th>
      <th>Left Date</th>
      <th>Current salary</th>
      <th>self employee</th>
      
      </tr>
  </thead>
  <tbody>

<!--came from ajax

  <tr>
  <?php 
    /* $mysql1="select * from  employ_detail  where borr_id='$id'";
           $mysql_b_d1=mysqli_query($conn,$mysql1);
           $rowwss1=mysqli_fetch_array($mysql_b_d1);
           
    
      ?>
     
      <td scope="row">#</td>
      <td><?php echo $rowwss1[2]; ?></td>
      <td><?php echo $rowwss1[3];  ?></td>
      <td><?php echo $rowwss1[4]; ?></td>
      <td><?php echo $rowwss1[5]; ?></td>
      <td><?php echo $rowwss1[6]; ?></td>
      <td><?php echo $rowwss1[7]; */ ?></td>
  </tr>
    
  </tbody>
</table>

--->
  
  
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
               <!--dwefc-->
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
