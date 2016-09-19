<?php


  $allowedExts = array(
  "pdf", 
  "doc", 
  "docx"
); 

$allowedMimeTypes = array( 
  'application/msword',
  'text/pdf'
  //'image/gif',
  //'image/jpeg',
 // 'image/png'
);

$extension = end(explode(".", $_FILES["b_pdf_format"]["name"]));



if ( ! ( in_array($extension, $allowedExts ) ) ) {
  die('Please provide another file type [E/2].');
}

if ( in_array( $_FILES["b_pdf_format"]["type"], $allowedMimeTypes ) ) 
{      
 move_uploaded_file($_FILES["b_pdf_format"]["tmp_name"], "uploads/" . $_FILES["b_pdf_format"]["name"]); 
}
else
{
die('Please provide another file type [E/3].');
}





?>