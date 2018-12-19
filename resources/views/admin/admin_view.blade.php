<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<span style="font-size: 25px; font-weight: bold; ">Admin Login</span>
	<span style="color: red;"><?php if(isset($result)) { echo $result; }?></span>
<form name="form" method="post" action="<?php base_url(); ?>Admin/login">
<table>
	<tr>
		<td>User Name</td>
		<td>
			<input type="text" name="username"><span style="color: red"><?php echo form_error('username');?></span>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
			<input type="password" name="password"><span style="color: red"><?php echo form_error('password');?></span>
		</td>
	</tr>
		<tr>
		<td colspan="2"><input type="submit" name="login" value="Login"></td>
	</tr>
</table>
</form>
</body>
</html>