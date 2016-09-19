<?php  $sql=mysqli_query($conn,"select count(*) as c from borrow_user");
    
    $rows=mysqli_fetch_array($sql);
    echo $rows['c'];



?>