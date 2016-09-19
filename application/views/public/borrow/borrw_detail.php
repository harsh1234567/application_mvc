<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
<?php 
 
 $id=$_SESSION['id1'];

?>
<?php $sel_for_detail ="select count(*)  as c from borrow_detail bd,educatation_detail ed,employ_detail eed where bd.borrower_id='$id' and bd.borrower_id=ed.borr_id and bd.borrower_id=eed.borr_id";
   $mysql_check=mysqli_query($conn,$sel_for_detail);
   $rows_c=mysqli_fetch_array($mysql_check);
   if($rows_c['c']<=0)
   {
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
    }
    else{
//   echo "<strong >your detail is inserted in database ..</strong>";
    include('lender_about_loan.php');
  }
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


 