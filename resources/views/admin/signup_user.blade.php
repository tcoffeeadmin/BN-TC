<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>Home/new_user">

<table>
	<tr>
		<td>Name<span style="color: red;">**</span></td>
		<td>
			<input type="text" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; }  ?>">
			<span style="color: red"><?php echo form_error('name');?></span>
		</td>
	</tr>

	<tr>
		<td>Email<span style="color: red;">**</span></td>
		<td>
			<input type="email" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; }  ?>">
			<span style="color: red"><?php echo form_error('email');?></span>
		</td>
	</tr>

	<tr>
		<td>Mobile<span style="color: red;">**</span></td>
		<td>
			<input type="text" name="mobile" value="<?php if(isset($_POST['mobile'])) { echo $_POST['mobile']; }  ?>">
			<span style="color: red"><?php echo form_error('mobile');?></span>
		</td>
	</tr>

	<tr>
		<td>Password<span style="color: red;">**</span></td>
		<td>
			<input type="text" name="password" value="<?php if(isset($_POST['password'])) { echo $_POST['password']; }  ?>">
			<span style="color: red"><?php echo form_error('password');?></span>
		</td>
	</tr>

	<tr>
		<td>Confirm Password<span style="color: red;">**</span></td>
		<td>
			<input type="text" name="confirm_password" value="<?php if(isset($_POST['confirm_password'])) { echo $_POST['confirm_password']; }  ?>">
			<span style="color: red"><?php echo form_error('confirm_password');?></span>
		</td>
	</tr>

	<tr>
		<td><input type="text" name="reg_mobileno" placeholder="Mobile Number"></td>
		<td><input type="text" name="otp" placeholder="OTP" ></td>
	</tr>

	<tr>
		<td><input type="button" name="cancel" value="Cancel"></td>
		<td><input type="submit" name="save" value="Submit"></td>
	</tr>

</table>

</form>
</body>
</html>