<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<span style="font-size: 25px; font-weight: bold; ">Client Registration</span>
<body>
	<form name="form1" action="<?php echo base_url() ?>Client/registeration" method="post">
<table>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email" id="id_email" onblur="check_email(this.value)"></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><input type="text" name="mobile" id="id_mobile">
			<a href="#"><span onclick="send_otp();">Send OTP</span></a>
		</td>
	</tr>
	<tr>
		<td>OTP</td>
		<td><input type="text" name="otp"></td>
	</tr>
	<tr>
		<input type="text" name="order_type" value="<?php if(isset($_POST['order_type'])){ echo $_POST['order_type']; } else if(isset($order_type1)){ echo $order_type1; } ?>">
		<input type="text" name="food" value="<?php if(isset($_POST['food'])){ echo $_POST['food']; } else if(isset($food1 )){ echo $food1; } ?>">
		<input type="text" name="qty" value="<?php if(isset($_POST['qty'])){ echo $_POST['qty']; } else if(isset($qty1)){ echo $qty1; } ?>">
		<input type="text" name="location" value="<?php if(isset($_POST['location'])){ echo $_POST['location']; } else if(isset($location1)){ echo $location1; } ?>">



		<input type="text" name="from_date" value="<?php if(isset($_POST['from_date'])){ echo $_POST['from_date']; } else if(isset($from_date)){ echo $from_date; } ?>">

		<input type="text" name="to_date" value="<?php if(isset($_POST['to_date'])){ echo $_POST['to_date']; } else if(isset($to_date)){ echo $to_date; } ?>">



		<td colspan="2"><input type="submit" name="save" value="Pay Now"></td>
	</tr>
</table>

</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</body>
</html>

<script type="text/javascript">
	function check_email(email)
	{
	 var email_id = email;
			if(email_id != '')
			{
		     $.ajax({
		         type: "POST",
		         url: "<?php  echo base_url(); ?>" + "Client/check_email",
		         data: {email_id: email_id},
		       //  dataType: JSON,  
		         cache:false,
		         success: 
		              function(data)
		              {

		              	if(data == '1' )
		              	{
		              		alert('Email id already registerd');
		              		document.getElementById("id_email").value = "";

		              	}

		              }
		          });
			}
			else
			{
				alert('Invalid IFSC Number');
			}

	}

	function send_otp()
	{

		var mobile_no = document.getElementById("id_mobile").value;
	
			if(mobile_no != '')
			{
		     $.ajax({
		         type: "POST",
		         url: "<?php  echo base_url(); ?>" + "Client/send_otp",
		         data: {mobile_no: mobile_no},
		       //  dataType: JSON,  
		         cache:false,
		         success: 
		              function(data)
		              {

		              	if(data == '1' )
		              	{
		              		alert('Mobile number already registerd');
		              		document.getElementById("id_mobile").value = "";

		              	}
		              	else if(data == '0')
		              	{
		              		alert('OTP send successfully');
		              	}

		              }
		          });
			}
			else
			{
				alert('Invalid IFSC Number');
			}
	}
</script>



