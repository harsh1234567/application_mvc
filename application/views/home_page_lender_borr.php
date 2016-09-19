<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <title>Home</title>
  <!-- Bootstrap -->
    <link rel="icon" href="https://cdn.jsdelivr.net/bootstrap-social/5.0.0/bootstrap-social.css" > <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="../../css/bootstrapValidator.css"/>-->
   
   
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">
 
    <!-- Theme CSS -->
  <?= link_tag('assets/agency.min.css');  ?>
   
   
    <script src="https://code.jquery.com/jquery-2.2.3.js" integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4=" crossorigin="anonymous"></script>

    <!-- Theme CSS -->
   
  <!-- Links -->
  <!--JS-->

  <style>
  header .intro-text {
    padding-top: 100px;}
  .navbar-custom .nav li a:focus, .navbar-custom .nav li a:hover {
    color: #333333;
    outline: 0;
}
  .btn-primary {
    color: #fff;
    background-color: #fe363e;
    border-color: #fe363e;}
  .panel-danger > .panel-heading {
  background-color: #fe363e; }
  .navbar-custom .navbar-brand {
    color: #fe363e;}
    .navbar-custom .nav li a, .navbar-custom .navbar-toggle {
    
    color: #fe363e;}
  .navbar-default {
    background-color: rgba(245, 245, 245, 0.97);
    border-color: none;
}
   .form-control {
    display: block;
    width: 100%;
    height: 35px;
    padding: 8px 60px;
    border-radius: 10px;
    font-size:13px;

  }.btn-sm, .btn-group-sm > .btn {
    padding: 0.5rem 0.9375rem;
    font-size: 0.9rem;
    line-height: 1.375rem;
    border-radius: 1.0rem;
    padding-top: 0.4375rem;
}.navbar-custom .nav li a, .navbar-custom .navbar-toggle {
    color: #fe363e;
}
  </style>

  <script src='js/device.min.js'></script>
</head>
<body  id="page-top" class="index" style='background-color: #f5f5f5;' >
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">sunshine</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" >Home</a>
                    </li>
                  
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#M" style='color:#000;'>Login</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
  <header style=' text-align: center;
    color: #fe363e;'>  <div class="container">
            <div class="intro-text">
  
 
      
                <div class="intro-lead-in">Welcome To Our Site!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
       
          </div>
        </div>

        <div class="container">
            <table class="table table-hover">
                 <tbody>
              <tr class="success">
            
             </tr>
         </tbody>
            </table>

        </div>
   </header>
  <!--========================================================
                            CONTENT
  =========================================================-->
  <main class="text-center">
    <!-- Jumbotron section -->

    <!-- END jumbotron section-->

    <!-- Welcome -->
    <section id="regis">
      
    </section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<div class="modal fade" id="M" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header with-border">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">login</h4>
      </div>
      <div class="modal-body">
      <div class="row">
           <div class="col-md-12">
              <?php if( $error = $this->session->flashdata('login_failed')): ?>
                 <span class='alert alert-dismissible  alert-danger'>
                  <?= $error; ?>
                 </span>
              <?php  
              
                 endif;
              ?>


               <!---<form  method="post" action=""  id="defaultForm12">-->
            <!-- RD Mailform Type -->
            <?php echo form_open('Login/user_login',['class'=>'form-horizontal']);?>
            <input type="hidden" name="form-type" value="contact"/>
            <!-- END RD Mailform Type -->
            <div class="row">
               <div class="col-md-2"></div>
                <div class="col-md-8">
                
                      <?php 
                        $data=array(
                          'name'=>'email',
                          'class'=>'form-control',
                          'placeholder'=>'email'
                         // 'value'=>set_value('email')
                        );
                        echo form_input($data);
                      ?>
                      <span><?php echo form_error('email'); ?></span>
                       <br/>
                        <?php 
                        $data_p=array(
                          'name'=>'pass',
                          'class'=>'form-control',
                          'placeholder'=>'password'
                         // 'value'=>set_value('pass')
                        );
                        echo form_password($data_p);
                      ?>  <span><?php echo form_error('pass');?></span>
                 
                    <br/> 
                   

                </div>
            </div>
            <br/>
            <br/>
           <div class="row ">
                 <div class="col-md-12">
                   
                   <div class="form-group">

                 <?php 
                     $data_r=array(
                          'name'=>'reset',
                          'class'=>'btn btn-default',
                          'value'=>'reset',
                        );
                        echo form_reset($data_r);

                 ?>
                 <?php 
                     $data_s=array(
                          'name'=>'log',
                          'class'=>'btn btn-danger',
                          'value'=>'login',
                        );
                        echo form_submit($data_s);

                 ?>
                 <br/>
                 <a href="index.php?option=regis_b" >register as a borrwer </a>||
                  <a href="index.php?option=regis_l">register as a lender </a>
          </div>
             <?php// echo validation_errors();?>
            </div>
          
    
      </div></form>
      </div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#defaultForm12').bootstrapValidator({
            message: 'This value is not valid',
            container: 'tooltip',
           feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
               email: {
                   validators: {
                         notEmpty: {
                          message: 'The email is required and cannot be empty'
                     }
                } 
            },
            pass: {
                 validators: {
                     notEmpty: {
                        message: 'The password is required and cannot be empty'
                     }
                 }
             }
      

    }
  }
    );

});

</script>
</div>
      <div class="modal-footer">
            </div>
    </div><!-- /.modal-content -->
<!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"/></script>
    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    

<!-- </script> -->

</body>
</html>
