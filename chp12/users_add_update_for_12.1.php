<div class="well">
	<h3>Update User</h3>

	<?php

		$user_id = intval($_GET['user_id']);
		$User =  GetInfo($db1, "Users", $user_id);

		$first_name = $User['first_name'];
		$last_name = $User['last_name'];
	?>

	<form action="controller_users.php" method="post" class="form-inline">

		<div>First Name:</div>
		<div><input type="text" name="first_name" value="<?php print $first_name;?>" class="form-control" /></div>

		<div>Last Name:</div>
		<div><input type="text" name="last_name" value="<?php print $last_name;?>" class="form-control" /></div>

		<div style="margin-top:10px;">
			<input type="hidden" name="UpdateUser" value="1" />
			<input type="hidden" name="user_id" value="<?php print $user_id;?>" />
			<input type="submit" name="btnUpdateUser" value="Update User" class="btn btn-primary" />
		</div>
	</form>
</div>