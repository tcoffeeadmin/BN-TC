<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="<?php echo base_url() ?>images/favicon.png" type="image/gif" sizes="16x16">
</head>
<body>

<div class="container" id="tifin-form-style-1">
  <h2>Register</h2>
  <form action="<?php echo base_url(); ?>User/new_registration" method="post">

    
	  <div class="form-group">
      <label for="email">Phone no:</label><span style="color: red">**</span>
       <input type="text" maxlength="10" class="form-control" id="phone_id" placeholder="Phone no" name="phone" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>">
        <span style="color: red"><?php echo form_error('phone');?></span>
    </div>


    <div class="form-group" id="otp_button">
        <a href="#"><button type="button" class="btn btn-default" onclick="send_otp();">Send OTP</button></a>
    </div>


    <div class="form-group" style="display: none;" id="otp_id">
      <label for="email">OTP:</label><span style="color: red">**</span>
      <input type="text" class="form-control" id="email" placeholder="OTP" name="otp" maxlength="6" onkeyup="check_otp(this.value);">
      <span style="color: red; display: none" id="otp_error" >Invalid OTP</span>
       <a href="#"><span  onclick="send_otp();">Resend OTP??</span></a>
    </div>

    <div class="form-group" style="display: none;" id="name_id">
      <label for="email">Name:</label><span style="color: red">**</span>
      <input type="text" class="form-control" id="email" placeholder="Name" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>" >
       <span style="color: red"><?php echo form_error('name');?></span>
    </div>
    

    <div class="form-group" style="display: none;" id="email_id">
      <label for="email">Email:</label><span style="color: red">**</span>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
       <span style="color: red"><?php echo form_error('email');?></span> 
    </div>

     <div class="form-group" style="display: none;" id="password_id">
      <label for="email">Password:</label><span style="color: red">**</span>
      <input type="password" class="form-control" id="email" placeholder="Password" name="password" value="<?php if(isset($_POST['password'])){ echo $_POST['password']; } ?>"> 
       <span style="color: red"><?php echo form_error('password');?></span>
    </div>

     <div class="form-group" style="display: none;" id="confrim_password_id">
      <label for="email">Confirm Password:</label><span style="color: red">**</span>
      <input type="password" class="form-control" id="email" placeholder="Confirm Password" name="confirm_password" value="<?php if(isset($_POST['confirm_password'])){ echo $_POST['confirm_password']; } ?>"> 
       <span style="color: red"><?php echo form_error('confirm_password');?></span>
    </div>


  

 <div class="form-group" style="display: none;" id="signin_id">
    <a href="signin.html"><button type="submit" class="btn btn-default">Signup</button></a>
</div>

  </form>
  </div>


</body>
</html>


<script type="text/javascript">
  
  function send_otp()
  {
     var mobile_no = document.getElementById("phone_id").value;

    if(mobile_no != " ")
    {
       $.ajax({
       type: "POST",
       url: "<?php  echo base_url(); ?>" + "User/send_otp_registration",
       data: { mobile_no: mobile_no },
       //dataType: JSON,  
       cache:false,
       success: 
            function(data)
            { 
                if(data == '1' )
                  {
                    alert('OTP Send Successfully');
                    $("#otp_id").css("display", "block");

                  }
                else if(data == '0')
                  {
                    
                    $("#otp_id").css("display", "none");
                   
                  }
            }
        });
    }
  }
          


function check_otp(value)
{
  
  var otp = value;
  var phone_id = document.getElementById('phone_id').value;
  var length = otp.length;

  

   if(otp != " ")
   {
    if(length == 6)
    {
      $.ajax({
           type: "POST",
           url: "<?php  echo base_url(); ?>" + "User/verify_otp",
           data: {otp: otp,mobile_no: phone_id},
          //dataType: JSON,  
           cache:false,
           success: 
                function(data)
                {
               
                  if(data == 1 )
                    {
                        $("#name_id").css("display", "block");
                        $("#email_id").css("display", "block");
                        $("#password_id").css("display", "block");
                        $("#signin_id").css("display", "block");
                        $("#confrim_password_id").css("display", "block");
                      
                      

                        $("#otp_error").css("display", "none");


                    }
                    else if(data == 0)
                    {
                      
                        $("#name_id").css("display", "none");
                        $("#email_id").css("display", "none");
                        $("#password_id").css("display", "none");
                        $("#signin_id").css("display", "none");
                        $("#otp_error").css("display", "block");
                        $("#confrim_password_id").css("display", "block");

                        

                    
                    }
            }
        });
    }
   }
}


</script>