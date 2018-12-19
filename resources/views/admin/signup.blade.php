<!DOCTYPE html>
<html lang="en">
<head>
  <title>tifinlife</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="icon" href="<?php echo base_url() ?>images/favicon.png" type="image/gif" sizes="16x16">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {   
  border-color: rgba(126, 239, 104, 0.8);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(126, 239, 104, 0.6);
  outline: 0 none;
}
  </style>
</head>
<body>

<div class="jumbotron text-center">

</div>
  
<div class="container">
<div class="col-md-8">
  <div class="row">

<span style="color: red;">
  <?php 
        if (isset($wron_up)) {
              echo $wron_up;
         }  
  ?></span>
  <?php

if(isset($_POST['itemqty']))

  { $item_qty = $_POST['itemqty']; }

else if(isset($item_qty))

  {  $item_qty;} 

if(isset($_POST['rate']))

  { $rate = $_POST['rate']; }

else if(isset($rate))

  { $rate;}

if(isset($_POST['gst_percentage']))

  { $gst_percentage = $_POST['gst_percentage']; } 

else if(isset($gst_percentage))

  {  $gst_percentage;}

if(isset($_POST['handling_rate']))

  { $handling_rate = $_POST['handling_rate']; }

else if(isset($handling_rate))

  {  $handling_rate;}

 if(isset($_POST['ordertype']))
  
  { $order_type = $_POST['ordertype']; } 

  else if(isset($order_type))

    {  $order_type;}

           
              $food_price = $rate * $item_qty;
              $gst_rate = ($gst_percentage * $rate) / 100;
              $total_gst = $gst_rate * $item_qty;
              $total_handlingrate = $handling_rate * $item_qty;
              $total_amount =   $food_price + $total_gst + $total_handlingrate;

   ?>
  <form action="<?php echo base_url(); ?>User/save_user" method="post">

    <input type="hidden" name="ordertype" value="<?php if(isset($_POST['ordertype'])){ echo $_POST['ordertype']; } else if(isset($order_type)){ echo $order_type;} ?>">

    <input type="hidden" name="fooditem" value="<?php if(isset($_POST['fooditem'])){ echo $_POST['fooditem']; } else if(isset($food_item)){ echo $food_item;} ?>">

     <input type="hidden" name="food_package" value="<?php if(isset($_POST['fooditem'])){ echo $_POST['fooditem']; } else if(isset($food_item)){ echo $food_item;} ?>">
     

    <input type="hidden" name="itemqty" value="<?php if(isset($_POST['itemqty'])){ echo $_POST['itemqty']; } else if(isset($item_qty)){ echo $item_qty;} ?>">

    <input type="hidden" name="location" value="<?php if(isset($_POST['location'])){ echo $_POST['location']; } else if(isset($location)){ echo $location;} ?>">

    <input type="hidden" name="company" value="<?php if(isset($_POST['company'])){ echo $_POST['company']; } else if(isset($company)){ echo $company;} ?>">

    <input type="hidden" name="rate" value="<?php if(isset($_POST['rate'])){ echo $_POST['rate']; } else if(isset($rate)){ echo $rate;} ?>">

    <input type="hidden" name="gst_percentage" value="<?php if(isset($_POST['gst_percentage'])){ echo $_POST['gst_percentage']; } else if(isset($gst_percentage)){ echo $gst_percentage;} ?>">

    <input type="hidden" name="handling_rate" value="<?php if(isset($_POST['handling_rate'])){ echo $_POST['handling_rate']; } else if(isset($handling_rate)){ echo $handling_rate;} ?>">

    <input type="hidden" name="delivery_date" value="<?php if(isset($_POST['delivery_date'])){ echo $_POST['delivery_date']; } else if(isset($delivery_date)){ echo $delivery_date;} ?>">


    <input type="hidden" name="signin_status" id="sign_status_id">

    <?php if($order_type == "Monthly"){ ?>

          <input type="hidden" name="order_date" value="<?php if(isset($_POST['order_date'])){ echo $_POST['order_date']; } else if(isset($total_order_day)){ echo $total_order_day; } ?>">

    <?php } ?>
  
  <div class="col-md-12">
  <div class="form-group">
    <label for="text">Enter Email ID / Mobile Number:</label>
    <input type="text"  name="email_mobile_number" class="form-control" id="id_email_mobile_number">
     <span style="color: red"><?php echo form_error('email_mobile_number');?></span>

      <span style="color: red; display: none" id="error_message">Please Enter valid Email ID / Mobile number</span><span id="change_text" style="display: none;"><a href="#" onclick="change_value(); "> Change?</a></span>
  </div>
  </div>


  <div class="col-md-12" id="mobile_box" style="display: none; " >
  <div class="form-group">
    <label for="text">Mobile Number:</label>
    <input type="text" maxlength="10" onkeypress="return isNumber(event)" name="mobile_number" class="form-control" id="id_mobile_number" onkeyup="send_otp(this.value);">
     <span style="color: red"><?php echo form_error('mobile_number');?></span>
      <span style="color: red; display: none" id="error_message1">Please Enter valid Email ID / Mobile number</span>
  </div>
  </div>



  <div class="col-md-12" id="email_box" style="display: none; ">
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="id_email">
     <span style="color: red"><?php echo form_error('email');?></span>
  </div>
 </div> 
  
  
<div class="col-md-4" style="display: none; " id="id_send_otp">
  <div class="form-group">
    <label for="pwd">&nbsp;</label><br>
     <button type="button" class="btn btn-default" onclick="send_otp();">Send OTP</button>
  </div>
</div>


<div class="col-md-4" style="display: none; " id="id_otp"> 
   <div class="form-group">
   <label for="pwd">Enter OTP:</label>
    <input type="text" onkeypress="return isNumber(event)" maxlength="6" class="form-control" name="otp"  id="otp_id">
  </div>
</div>

<div class="col-md-2" style="display: none; " id="id_otp_verify">
  <div class="form-group">
    <label for="pwd">&nbsp;</label><br>
     <button type="button" class="btn btn-default" onclick="verify_otp1();">Verify OTP</button>
 
  </div>
</div>

<div class="col-md-2" style="display: none; " id="id_tick_div">
  <div class="form-group">
    <label for="pwd">&nbsp;</label><br>
     <img style="display: none" id="tick_pic" src="<?php echo base_url(); ?>assets/user/images/tick.png" width="40%" height="40%">
     <img style="display: none" id="cross_pic" src="<?php echo base_url(); ?>assets/user/images/cross.png" width="40%" height="40%">
  </div>
</div>



  <div class="col-md-12" style="display: none; " id="id_newpassword"> 
    <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="new_password" id="">
    <span style="color: red"><?php echo form_error('new_password');?></span>
  </div>
  </div>


  <div class="col-md-12" style="display: none; " id="id_confirmpasword"> 
    <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" name="confirm_password" id="">
    <span style="color: red"><?php echo form_error('confirm_password');?></span>
  </div>
  </div>

   <div class="col-md-12" style="display: none; " id="id_password"> 
    <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" id="id_password_value">
    <span style="color: red"><?php echo form_error('password');?></span>
  </div>
  </div>


  <div class="col-md-12" id="id_continoue" >
    <button type="button" class="btn btn-default" onclick="check_email_mobile()">Continoue</button>
  </div>

  <!-- <div class="col-md-12" id="id_continoue1" style="display: none; ">
    <button type="button" class="btn btn-default" onclick="check_mobile1()">Continoue1</button>
  </div> -->


  <div class="col-md-12" style="display: none;" id="id_signup">
    <input type="hidden" name="total_amount" value="<?php if(isset($_POST['total_amount'])) { echo $_POST['total_amount']; } else if(isset($total_amount)) { echo $total_amount; }  ?> ">
  <button type="submit" class="btn btn-default">Signup</button>
  </div>

  <div class="col-md-12" style="display: none;" id="id_signin">
    <input type="hidden" name="total_amount" value="<?php if(isset($_POST['total_amount'])) { echo $_POST['total_amount']; } else if(isset($total_amount)) { echo $total_amount; }  ?> ">
   <button type="submit" class="btn btn-default" onclick="sign_in();">Signin</button>
  </div>

  

  <div class="col-md-12"> 
    <div class="form-group">


  <?php if($order_type == "Instantly") { ?>

    <table width="100%" >
      
      <tr style="border-bottom: 1px solid #001; ">
        <td>Item Description </td>
        <td>Qty</td>
        <td>Rate</td>
        <td>GST%</td>
        <td>Handling Charge</td>
        <td>Total Amount</td>
      </tr>
      <tr style="border-bottom: 1px solid #001; ">
        <td><?php if(isset($food_item)){ echo $food_item; } ?></td>
        <td><?php if(isset($item_qty)){ echo $item_qty; } ?></td>
        <td><?php if(isset($rate)){ echo $rate; } ?></td>
        <td><?php if(isset($gst_percentage)){ echo $gst_percentage; } ?></td>
        <td><?php if(isset($handling_rate)){ echo $handling_rate; } ?></td>
        <td>

        <?php 

              $food_price = $rate * $item_qty;
              $gst_rate = ($gst_percentage * $rate) / 100;
              $total_gst = $gst_rate * $item_qty;
              $total_handlingrate = $handling_rate * $item_qty;
              echo $total_amount =   $food_price + $total_gst + $total_handlingrate;

         ?>
           
         </td>
      </tr>
    </table>

<?php } else if($order_type == "Monthly") { ?>

  <table width="100%" >
      
      <tr style="border-bottom: 1px solid #001; ">
        <td>Item Description </td>
        <td>Qty</td>
        <td>Rate</td>
        <td>GST%</td>
        <td>Day Count</td>
        <td>Total Amount</td>
      </tr>
      <tr style="border-bottom: 1px solid #001; ">
        <td><?php if(isset($food_item)){ echo $food_item; } ?></td>
        <td><?php if(isset($item_qty)){ echo $item_qty; } ?></td>
        <td><?php if(isset($rate)){ echo $rate; } ?></td>
        <td><?php if(isset($gst_percentage)){ echo $gst_percentage; } ?></td>
        <td><?php if(isset($total_order_day)){ echo $total_order_day; } ?></td>
        <td>

        <?php 

              $food_price = $rate * $item_qty * $total_order_day;
              $gst_rate = ($gst_percentage * $rate * $total_order_day) / 100;
              $total_gst = $gst_rate * $item_qty;
              echo $total_amount =   $food_price + $total_gst;

         ?>
           
         </td>
      </tr>
    </table>

<?php } ?>


   
  </div>
  </div>


</form>

  </div>
</div>
<!----right sidebar--->

<div class="col-md-4">
  <div class="row">
    
  </div>
</div>

</div>
<script src="<?php echo base_url(); ?>assets/js/my_js.js"></script>
</body>
</html>


<script type="text/javascript">
  
  function send_otp()
  {

    var mobile_no = document.getElementById("id_mobile_number").value;
    var email     = document.getElementById("id_email_mobile_number").value;

 if (/^\d{10}$/.test(mobile_no)) 
    {
       

      if(mobile_no != '')
      {
         $.ajax({
             type: "POST",
             url: "<?php  echo base_url(); ?>" + "User/send_otp",
             data: {mobile_no: mobile_no,email:email},
           //  dataType: JSON,  
             cache:false,
             success: 
                  function(data)
                  {

                

                    if(data == '0' )
                    {
                      $("#id_password ").css("display", "block");
                      $("#id_otp ").css("display", "none");
                      $("#id_otp_verify ").css("display", "none");
                       $("#id_continoue ").css("display", "none");
                      // $("#id_continoue1 ").css("display", "none");
                      $("#id_signin ").css("display", "block");

                     
                      document.getElementById("id_email_mobile_number").value = mobile_no;   
                      $("#mobile_box ").css("display", "none");
                      document.getElementById("sign_status_id").value = "1";   

                    
                    }
                    else if(data == '1')
                    {
                       document.getElementById("id_email").value = email;   
                      alert('OTP send successfully');
                      $("#id_otp ").css("display", "block");
                      $("#id_otp_verify ").css("display", "block");
                      $("#id_password ").css("display", "none");
                      $("#id_signin ").css("display", "none");

                    }

                  }
              });
      }
      else
      {
        alert('Invalid IFSC Number');
      }
    }
  }


  function verify_otp()
  {

    var otp = document.getElementById("otp_id").value;
    var mobile_no = document.getElementById("id_email_mobile_number").value;
   
   
      if(otp != '')
      {
         $.ajax({
             type: "POST",
             url: "<?php  echo base_url(); ?>" + "User/verify_otp",
             data: {otp: otp,mobile_no: mobile_no},
           //  dataType: JSON,  
             cache:false,
             success: 
                  function(data)
                  {
                  
                    if(data == '1' )
                    {
                    
                      $("#id_tick_div").css("display", "block");
                      $("#tick_pic").css("display", "block");
                      $("#cross_pic").css("display", "none");

                      $("#id_newpassword").css("display", "block");
                      $("#id_confirmpasword").css("display", "block");
                      $("#id_signup").css("display", "block");
                      // $("#id_continoue1").css("display", "none");

                    
                
                    }
                    else if(data == '0')
                    {
          
                      document.getElementById('otp_id').value = '';
                      $("#id_tick_div").css("display", "block");
                      $("#cross_pic").css("display", "block");
                      $("#tick_pic").css("display", "none");

                       $("#id_newpassword").css("display", "none");
                      $("#id_confirmpasword").css("display", "none");

                       $("#id_signup").css("display", "none");
                       $("#id_continoue1").css("display", "block");


                    }
                   


                  }
              });
      }
      else
      {
        alert('Invalid OTP Number');
      }
  }


function verify_otp1()
  {

    var otp = document.getElementById("otp_id").value;
    var mobile_no = document.getElementById("id_mobile_number").value;
   


      if(otp != '')
      {
         $.ajax({
             type: "POST",
             url: "<?php  echo base_url(); ?>" + "User/verify_otp",
             data: {otp: otp,mobile_no: mobile_no},
           //  dataType: JSON,  
             cache:false,
             success: 
                  function(data)
                  {


                  
                    if(data == '1' )
                    {
                    
                      $("#id_tick_div").css("display", "block");
                      $("#tick_pic").css("display", "block");
                      $("#cross_pic").css("display", "none");

                      $("#id_newpassword").css("display", "block");
                      $("#id_confirmpasword").css("display", "block");
                      $("#id_signup").css("display", "block");
                      // $("#id_continoue1").css("display", "none");

                    
                
                    }
                    else if(data == '0')
                    {
          
                      document.getElementById('otp_id').value = '';
                      $("#id_tick_div").css("display", "block");
                      $("#cross_pic").css("display", "block");
                      $("#tick_pic").css("display", "none");

                       $("#id_newpassword").css("display", "none");
                      $("#id_confirmpasword").css("display", "none");

                       $("#id_signup").css("display", "none");
                       // $("#id_continoue1").css("display", "block");


                    }
                   


                  }
              });
      }
      else
      {
        alert('Invalid OTP Number');
      }
  }



  function check_email_mobile()
  {
    var email_mobile = document.getElementById("id_email_mobile_number").value;

    if (/^\d{10}$/.test(email_mobile)) 
    {
        var contact = '1';
    }
    else
    {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        var result = re.test(String(email_mobile).toLowerCase());

        if(result == true)
        {
          var contact = '2';
        }
        else
        {
          var contact = '3';
        }
    }

    if(email_mobile != ' ' && (contact == '1' || contact == '2'))
      {


         $.ajax({
             type: "POST",
             url: "<?php  echo base_url(); ?>" + "User/verify_contact",
             data: {email_mobile: email_mobile},
           //  dataType: JSON,  
             cache:false,
             success: 
                  function(data)
                  {
       
                    if(data == '1' )
                    {
                            
                              if (/^\d{10}$/.test(email_mobile)) 
                              {
                                  $("#id_password ").css("display", "block");
                                  $("#id_signin ").css("display", "block");  
                                  $("#id_continoue ").css("display", "none");     
                                  $("#error_message").css("display", "none");
                                  $("#change_text ").css("display", "block");
                                  document.getElementById("id_email_mobile_number").readOnly = true;
                                  document.getElementById("sign_status_id").value = "1";   
                              }
                              else
                              {
                                  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                                  var result = re.test(String(email_mobile).toLowerCase());

                                  if(result == true)
                                  {
                                       $("#id_password ").css("display", "block");
                                       $("#error_message").css("display", "none");
                                       $("#id_signin ").css("display", "block");  
                                       $("#id_continoue ").css("display", "none"); 
                                       $("#change_text ").css("display", "block"); 
                                        $("#id_continoue ").css("display", "none");
                                       document.getElementById("sign_status_id").value = "1";   
                                       document.getElementById("id_email_mobile_number").readOnly = true;   
                                     
                                  }
                                  else if(result == false)
                                  {
                                    $("#error_message").css("display", "block");
                                    $("#email_box").css("display", "none");
                                    $("#mobile_box").css("display", "none");

                                    $("#id_signin ").css("display", "none");  
                                    $("#id_continoue ").css("display", "block");    
                                    document.getElementById("sign_status_id").value = "0"; 
                                    document.getElementById("id_email_mobile_number").readOnly = true;  
                                    $("#change_text ").css("display", "block"); 

                                  }
                              }
                    }
                    else if(data == '0')
                    {
                         if (/^\d{10}$/.test(email_mobile)) 
                              {
                                   $("#id_otp ").css("display", "block");
                                   $("#id_otp_verify ").css("display", "block");
                                   $("#error_message").css("display", "none");
                                   $("#change_text ").css("display", "block");

                                   $("#id_continoue ").css("display", "none");


                                   document.getElementById("sign_status_id").value = "0";   
                                   document.getElementById("id_email_mobile_number").readOnly = true;
                                   document.getElementById("id_mobile_number").value = email_mobile; 
                              }
                              else
                              {
                                  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                                  var result = re.test(String(email_mobile).toLowerCase());
                                  document.getElementById("sign_status_id").value = "0";   

                                  if(result == true)
                                  {
                                       $("#mobile_box").css("display", "block");
                                        $("#id_password ").css("display", "none");
                                       $("#id_continoue").css("display", "none");
                                       // $("#id_continoue1").css("display", "block");
                                       $("#error_message").css("display", "none");
                                       document.getElementById("id_email_mobile_number").readOnly = true;
                                       $("#change_text ").css("display", "block");
                                     
                                  }
                                  else if(result == false)
                                  {
                                    $("#error_message").css("display", "block");
                                    $("#email_box").css("display", "none");
                                    $("#mobile_box").css("display", "none");
                                    document.getElementById("id_email_mobile_number").readOnly = true;
                                    $("#change_text ").css("display", "block");
                                  }
                              }
                    }

                  }
              });
      }
      else
      {

        $("#error_message").css("display", "block");
      }
  }



function check_mobile1()
{
  var mobile_no = document.getElementById("id_mobile_number").value;
  if (/^\d{10}$/.test(mobile_no)) 
  {
    $("#error_message1").css("display", "none");



         $.ajax({
             type: "POST",
             url: "<?php  echo base_url(); ?>" + "User/verify_contact",
             data: {email_mobile: mobile_no},
           //  dataType: JSON,  
             cache:false,
             success: 
                  function(data)
                  {
                   
                    if(data == '1' )
                    {
                       $("#id_continoue ").css("display", "none");
                      $("#id_password ").css("display", "block");
                      $("#id_otp ").css("display", "none");
                       $("#id_otp_verify ").css("display", "none");

                    }
                    else if(data == '0')
                    {
                       $("#id_continoue ").css("display", "none");
                      $("#id_otp ").css("display", "block");
                       $("#id_otp_verify ").css("display", "block");
                      $("#id_password ").css("display", "none");
                    }

                  }
              });



  }
  else
  {
      $("#error_message1").css("display", "block");
  }

}



function change_value()
{
   document.getElementById("id_email_mobile_number").readOnly = false;
   document.getElementById("id_email_mobile_number").value = "";

    $("#mobile_box ").css("display", "none");
    $("#email_box ").css("display", "none");
    $("#id_send_otp ").css("display", "none");
    $("#id_otp ").css("display", "none");
    $("#id_otp_verify ").css("display", "none");
    $("#id_tick_div ").css("display", "none");
    $("#id_newpassword ").css("display", "none");
    $("#id_confirmpasword ").css("display", "none");
    $("#id_password ").css("display", "none");
    $("#id_continoue ").css("display", "block");
    // $("#id_continoue1 ").css("display", "none");
    $("#id_signup ").css("display", "none");
    $("#id_signin ").css("display", "none");
    $("#change_text ").css("display", "none");

}




</script>

