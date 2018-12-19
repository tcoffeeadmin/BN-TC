<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<span style="font-size: 25px; font-weight: bold;">Home</span>
<table>
	<tr>

		<td><input type="button" name="add_location" value="ADD LOCATION" style="background-color: blue;"></td>

		<td><a href="<?php echo base_url() ?>Home/food"  ><input type="button" name="add_food" value="ADD FOOD"></a></td>

		<td><a href="<?php echo base_url() ?>Home/notification"  ><input type="button" name="notification" value="ADD NOTIFICATION"></a></td>
		<td><a href="<?php echo base_url() ?>Home/banner"  ><input type="button" name="banner" value="ADD BANNER"></a></td>

		<td><input type="button" name="order_reports" value="ORDER REPORTS"> </td>
		<td><input type="button" name="cancel_order" value="CANCEL ORDER"></td>

	</tr>
</table>

<span style="font-size: 25px; font-weight: bold;">Location Information</span>
<form name="form" action="<?php echo base_url() ?>Admin/save_location_info" method="post">
<table>
	<tr>
		<td>Location Name</td>
		<td>
			<input type="text" name="location_name">
			<span style="color: red"><?php echo form_error('location_name');?></span>
		</td>
	</tr>
	<tr>
		<td>Location</td>
		<td>
			<input type="text" name="location"><span style="color: red"><?php echo form_error('location');?></span>
		</td>
	</tr>
	<tr>
		<td>Address Line1</td>
		<td>
			<input type="text" name="address1"><span style="color: red"><?php echo form_error('address1');?></span>
		</td>
	</tr>
	<tr>
		<td>Address Line2</td>
		<td>
			<input type="text" name="address2"><span style="color: red"><?php echo form_error('address2');?></span>
		</td>
	</tr>
	<tr>
		<td>City</td>
		<td>
			<input type="text" name="city"><span style="color: red"><?php echo form_error('city');?></span>
		</td>
	</tr>
	<tr>
		<td>District</td>
		<td>
			<input type="text" name="district"><span style="color: red"><?php echo form_error('district');?></span>
		</td>
	</tr>
	<tr>
		<td>Land Mark</td>
		<td>
			<input type="text" name="land_mark"><span style="color: red"><?php echo form_error('land_mark');?></span>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="save" value="Submit"></td>
	</tr>
	
</table>
</form>
</body>
</html>