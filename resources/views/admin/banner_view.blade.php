<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="0">
		<tr>
		<td><input type="button" name="add_location" value="ADD LOCATION" ></td>
		<td>
			<a href="<?php echo base_url() ?>Home/food">
				<input type="button" name="add_food" value="ADD FOOD" style="background-color: blue;">
			</a>
		</td>
		<td>
			<a href="<?php echo base_url() ?>Home/notification"  >
				<input type="button" name="notification" value="ADD NOTIFICATION">
			</a>
		</td>
		<td>
			<a href="<?php echo base_url() ?>Home/banner"  >
				<input type="button" name="banner" value="ADD BANNER">
			</a>
		</td>

		<td>
			<input type="button" name="order_reports" value="ORDER REPORTS">
		</td>
		<td>
			<input type="button" name="cancel_order" value="CANCEL ORDER">
		</td>


	</tr>


</table>
<form name="form1" method="post" action="<?php base_url() ?>../Admin/do_upload" enctype="multipart/form-data">
	
<table>
	<tr>
		<td>Title</td>
		<td><input type="text" name="title"></td>
	</tr>

	<tr>
		<td>Description</td>
		<td><input type="text" name="description"></td>
	</tr>

	<tr>
		<td>Banner File</td>
		<td><input type="file" name="userfile"></td>
	</tr>

	<tr>
		<td colspan="2"><input type="submit" name="save" value="Save"></td>
	</tr>
</table>

</form>

<table border="1">
	<tr>
		<td>Sl</td>
		<td>Title</td>
		<td>Description</td>
		<td>Image</td>
	</tr>
	<?php $i=0; foreach ($banner_info as $key) { $i++; ?>

	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $key['title']; ?></td>
		<td><?php echo $key['description']; ?></td>
		<td><img width="100px" height="70px;" src="<?php echo base_url(); ?>uploads/<?php echo $key['file_name']; ?>"></td>
		<td><?php if($key['status'] == '1'){ ?> <img width="20px" height="20px" src="../images/tick.png"> <?php } else if($key['status'] == '0') { ?>  <img width="20px" height="20px" src="../images/cross.png"> <?php } ?></td>
		<td>
		 <form name="form1" action="<?php echo base_url(); ?>Admin/banner_edit1" method="post">	
			<input type="hidden" value="<?php echo $key['id']; ?>" name="banner_id">
			<input type="submit" name="edit" value="Edit">
		</form>
		</td>
	</tr>
	 <?php } ?>
</table>
</body>
</html>