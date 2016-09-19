<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php $id=$_SESSION['id1'];
          $mysql=mysqli_query($conn,"select * from borrow_user where id='$id'");
          $rowsss=mysqli_fetch_array($mysql);
           $borr_name=$rowsss['user_name'];
         echo $borr_name;?> | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
 
  <!-- Font Awesome -->
   <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">

  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <style>
  .thumbnail {
    position:relative;
    overflow:hidden;
}
.skin-blue-light .main-header .navbar {
    background-color: #fe363e;
}
.skin-blue-light .main-header .logo {
    background-color: #fe363e;
    color: #fff;
    border-bottom: 0 solid transparent;
}
.skin-blue-light .main-header li.user-header {
    background-color:#fe363e;
}
.caption {
    position:absolute;
    top:0;
    right:0;
    background:rgba(171, 32, 57, 0.75);
    width:100%;
    height:100%;
    padding:2%;
    display: none;
    text-align:center;
    color:#fff !important;
    z-index:2;
}.nav-tabs-custom>.nav-tabs>li.active {
    border-top-color: #dd4b39;
}
  </style>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
     <script type="text/javascript" src="../jss/js/formValidation.js"></script>
 

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <?php $sel_noti=mysqli_query($conn,"select * from notification where user_id='$id'");
              $count=mysqli_num_rows($sel_noti);
          ?>
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php echo $count; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have<?php echo $count;?> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                 <?php $rows=mysqli_fetch_array($sel_noti);?>
                <ul class="menu">
                  
                 <li>

                    <a href="#">
                      <i class="fa fa-warning text-yellow"><?php 
                    
                      ?></i>
                      
                      <?php 
                       echo $rows['msg_from'].":".$rows['msg_to'];
                      ?>
                      </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<?php      $sel=mysqli_query($conn,"select * from borrow_user where id='$id'");
            $rows=mysqli_fetch_array($sel);
             $img= $rows['image'];

           if($img=="")
                 {
     
 
                       
                 ?>

                <img src="dist/img/avatar5.png" class="img-circle " height="20px" widht="20px" alt="User Image">

                 <?php                  
                 }
                 else{

                ?>
                <img src="<?php echo $img;?>" class="img-circle"  height="20px" widht="20px" alt="User Image">

               
               <?php  }
                 ?>

              <span class="hidden-xs"><?php 
                   $id=$_SESSION['id1'];
       
       $mysql=mysqli_query($conn,"select * from borrow_user where id='$id'");
       $rowsss=mysqli_fetch_array($mysql);
       $borr_name=$rowsss['user_name'];
         echo "<strong>hello ".$borr_name."</strong>";?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
             <?php 

                    include('image.php'); 
        
              ?>
                <p id="data_borrow_detail">
                 <?php
                     $id=$_SESSION['id1'];
                     $mysql=mysqli_query($conn,"select * from borrow_user where id='$id'");
                     $rowsss=mysqli_fetch_array($mysql);
                     $borr_name=$rowsss['user_name'];
                     
                     echo "<strong>hello ".$borr_name."</strong>";?>
                    <small>Member since <?php echo $rowsss['avt_date'];?></small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  
                  <a href="profile.php" class="btn btn-default btn-flat">profile</a>
                  
                 
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
