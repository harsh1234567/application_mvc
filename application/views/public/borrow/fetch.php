<?php 

extract($_POST);
if(isset($get_option) && !empty($get_option) )
{

     // echo $get_option;
    $get_option=strtolower($get_option);
    if($get_option=='rented')
    {


      echo 'r';

    }elseif($get_option=='living with parents'){

     echo "l_p";
  
 
   }elseif($get_option=='owned')
   {
  
      echo "o";

   }

}



?>