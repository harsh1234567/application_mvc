<?php session_start();
    if(isset($_SESSION['id1']) && !empty($_SESSION['id1']))
    {
      
          unset($_SESSION['id1']);
          session_destroy();
          header('location:../temp/site/index.php');
   
   }

?>