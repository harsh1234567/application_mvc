<?php session_start();
require('../confg/db.php');
 
 $id=$_SESSION['id1'];

?>
<?php $sel_for_detail ="select count(*) as c from borrow_detail where borrower_id='$id'";
   $mysql_check=mysqli_query($conn,$sel_for_detail);
   $rows_c=mysqli_fetch_array($mysql_check);
   if($rows_c['c']<=0)
   {
?>

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
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">
       $

  </span>
   <input type='text' class="form-control" name="bor_demand1" placeholder="borrow demand ">
   </div>
<br/>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"> Home Ownership</span>
   <select  name="home_own" class="form-control" >
   <option >Home Ownership</option>
   <option values='1'>Rented</option>
   <option values='2'>Owned</option>
   <option values='3'>living with parents</option>

   </select>
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">salary </span>
   <input type='text' name="salary" class="form-control" placeholder="Salary ">
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">other income </span>
   <input type='text' name="o_income" class="form-control" placeholder="other income ">
   </div>
<br/><div class="input-group">
  <span class="input-group-addon" id="basic-addon1">rent on house </span>
   <input type='text' name="rent_o_house" class="form-control" placeholder="rent on house ">
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
  <input type='submit' name='sub' value="add detail "  class="btn btn-success btn-sm">
  

</form>
<?php 
    }
    else{
//   echo "<strong >your detail is inserted in database ..</strong>";
    include('lender_about_loan.php');
  }
   ?>