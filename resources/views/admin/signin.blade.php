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
  <span style="color: red; "><?php if(isset($error)){ echo $error; }  ?></span>
  <h2>Sign in</h2>
  <form method="post" action="<?php echo base_url() ?>User/user_login" >

    <div class="form-group">
      <label for="email">Enter Email / Mobile Number :</label>
      <input type="text"  class="form-control" id="id_username" placeholder="Enter Email / Mobile" name="username" >
       <span style="color: red"><?php echo form_error('mobile');?></span>
       <span style="color: red; display: none;" id="invalid_error">Please enter valid Email ID / Mobile Number</span>
    </div>


    <div class="form-group"  id="password_div">
      <label for="pwd">Password :</label>
      <input type="password" class="form-control" id="id_pwd" placeholder="Enter password" name="pwd" >
       <span style="color: red"><?php echo form_error('pwd');?></span>
    </div>


    <div class="form-group" style="display: none;" id="otp_div">
      <label for="pwd">Enter OTP</label>
      <input type="text" class="form-control" id="id_otp" maxlength="6" placeholder="Enter OTP" name="otp" onkeyup="check_otp(this.value)">
       <span id="otp_error"  style=" display: none; color: red">Invalid OTP</span>
    </div>

    <div class="form-group" style="display: none;" id="new_password_div">
      <label for="pwd">Reset Password :</label>
      <input type="text" class="form-control" id="id_newpassword" placeholder="Enter new password" name="newpassword">
       <span style="color: red"><?php echo form_error('newpassword');?></span>
    </div>

    <div class="form-group" style="display: none" id="confirmpwd_div">
      <label for="pwd">Confirm Password :</label>
      <input type="password" class="form-control" id="id_confmpwd" placeholder="Enter confirm password" name="confmpwd" >
       <span style="color: red"><?php echo form_error('confmpwd');?></span>
    </div>

<div class="form-group">
    <button type="submit" class="btn btn-default" onclick="test();">Sign in</button>
</div>
	<div class="form-group">
	<ul>
	<li><a href="<?php echo base_url(); ?>User/register">Create account</a></li>
	<li><a href="#" onclick="send_otp()">Forgot password?</a></li>
	</ul>
	</div>
  </form>
</div>

</body>
</html>



<script type="text/javascript">
  
function test()
{
  alert('hello');
}


  function send_otp()
  {

    var username = document.getElementById("id_username").value;
  
    if(username != " ")
    {

        if (/^\d{10}$/.test(username)) 
        {

             $.ajax({
                 type: "POST",
                 url: "<?php  echo base_url(); ?>" + "User/send_otp",
                 data: {mobile_no: username},
                //dataType: JSON,  
                 cache:false,
                 success: 
                      function(data)
                      {

                        
                        if(data == 1 )
                          {
                            alert('OTP Send Successfully');
                            
                             $("#send_otp").css("display", "block");
                             $("#otp_div").css("display", "block");
                             // $("#new_password_div").css("display", "block");
                             // $("#confirmpwd_div").css("display", "block");
                             
                             $("#password_div").css("display", "none");
                              document.getElementById("invalid_error").style.display = "none      ";
                          }
                          else if(data == 0)
                          {
                            

                             $("#send_otp").css("display", "none");
                             $("#otp_div").css("display", "none");
                             // $("#new_password_div").css("display", "none");
                             // $("#confirmpwd_div").css("display", "none");
                             $("#password_div").css("display", "block");
                            document.getElementById("invalid_error").style.display = "block";
                          }
                      }
                  });
   
        } 
        else 
        {
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          var result = re.test(String(username).toLowerCase());

        

          if(result == true)
          {
      
               $.ajax({
                 type: "POST",
                 url: "<?php  echo base_url(); ?>" + "User/send_otp_email",
                 data: {email: username},
                 //dataType: JSON,  
                 cache:false,
                 success: 
                      function(data)
                      { 
                          if(data == '1' )
                            {

                              alert('OTP Send Successfully');
                      
                              $("#send_otp").css("display", "block");
                              $("#otp_div").css("display", "block");
                              // $("#new_password_div").css("display", "block");
                               $("#password_div").css("display", "none");
                              //$("#confirmpwd_div").css("display", "block");
                               document.getElementById("invalid_error").style.display = "none";


                            }
                            else if(data == '0')
                            {
                              document.getElementById("invalid_error").style.display = "block";
                              $("#send_otp").css("display", "none");
                              $("#otp_div").css("display", "none");
                              // $("#new_password_div").css("display", "none");
                              // $("#confirmpwd_div").css("display", "none");
                              $("#password_div").css("display", "block");
                            }
                      }
                });
          }
          else if(result == false)
          {

           
              document.getElementById("invalid_error").style.display = "block";
          }
        }    
    }
    else
    {
      
      document.getElementById("invalid_error").style.display = "block";
    }

}



function check_otp(value)
{
  
  var otp = value;
  var username = document.getElementById('id_username').value;
  var length = otp.length;

  

   if(otp != " ")
   {
    if(length == 6)
    {
      $.ajax({
           type: "POST",
           url: "<?php  echo base_url(); ?>" + "User/verify_otp",
           data: {otp: otp,mobile_no: username},
          //dataType: JSON,  
           cache:false,
           success: 
                function(data)
                {
               
                  if(data == 1 )
                    {
                        $("#new_password_div").css("display", "block");
                        $("#confirmpwd_div").css("display", "block");
                        $("#otp_error").css("display", "none");
                    }
                    else if(data == 0)
                    {
                      
                        $("#new_password_div").css("display", "none");
                        $("#confirmpwd_div").css("display", "none");
                        $("#otp_error").css("display", "block");

                        

                    
                    }
            }
        });
    }
   }
}

</script>