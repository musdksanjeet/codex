<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register data</title>
</head>
<body>
	<form method="post" action="<?php echo base_url(); ?>Crud/savedata">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
		  <tr>
		    <td width="230">First Name </td>
		    <td width="329">
		    	<input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>"/>
		    	<?php echo form_error('first_name'); ?>
		    </td>
		  </tr>
		  <tr>
		    <td>Last Name </td>
		    <td>
		    	<input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>"/>
		    	<?php echo form_error('last_name'); ?>
		    </td>
		  </tr>
		  <tr>
		    <td>Email ID </td>
		    <td>
		    	<input type="email" name="email" value="<?php echo set_value('email'); ?>"/>
		    	<?php echo form_error('email'); ?>
		    </td>
		  </tr>
		  <tr>
		    <td colspan="2" align="center">
		    	<input type="submit" name="save" value="Save Data"/>
		    </td>
		  </tr>
		</table>
	</form>
</body>
</html>
