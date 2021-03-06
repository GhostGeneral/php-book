<?php

	$task_id = intval($_GET['task_id']);

	if ($task_id == 0) {
		// Add a Task
		$header = "Add Task";

	} else {

		// Update a Task
		$header = "Update Task";

		$Task 			=  GetInfo($db1, "Tasks", $task_id);
		$user_id 		= $Task['user_id'];
		$description 	= $Task['description'];
		$date_assigned 	= date("n/j/Y", strtotime($Task['date_assigned']));
		$completed 		= $Task['completed'];
	}
?>


<div class="well">

	<h3><?php print $header;?></h3>

	<form action="../controllers/controller_tasks.php" method="post" class="form-inline">

		<div>User:* <span id="user_needed" style="display:none;" class="error error_alert">Required</span></div>
		<div>
			<select name="user_id" id="user_id" class="form-control" >
				<option value="0"></option>
				<option value="999">fake user</option>

				<?php
					$query = "SELECT * FROM Users";
					$get_entries = mysqli_query($db1, $query);

					if ( mysqli_num_rows($get_entries) == 0) {
						?>
							<option value="0"> - No Users Yet -</option>
						<?php
						
					} else {
						
						while ($entries = mysqli_fetch_array($get_entries)) {
							?>
							<option value="<?php print $entries['id'];?>" 
									<?php if ($user_id == $entries['id']) { ?> selected="selected" <?php } ?>
								>
								<?php print $entries['first_name'];?> <?php print $entries['last_name'];?>
							</option>
							<?php
						} // end while
					} // end if
				?>

			</select>		

		</div>

		<div>Description:* <span id="description_needed" style="display:none;" class="error error_alert">Required</span></div>
		<div><input type="text" name="description" id="description" value="<?php print $description;?>" class="form-control" /></div>

		<div>Date Assigned:* <span id="date_assigned_needed" style="display:none;" class="error error_alert">Required</span></div>
		<div><input type="text" name="date_assigned" id="date_assigned" value="<?php print $date_assigned;?>" class="form-control" /></div>

		<div>Completed:* <span id="completed_needed" style="display:none;" class="error error_alert">Required</span></div>
		<div>
			<select name="completed" id="completed" class="form-control">
				<option value=""></option>
				<option value="Y" <?php if ($completed == "Y") { ?> selected="selected" <?php } ?>>Yes</option>
				<option value="N" <?php if ($completed == "N") { ?> selected="selected" <?php } ?>>No</option>
			</select>
		</div>
		
		<div style="margin-top:10px;">
			<input type="hidden" name="AddUpdateTask" value="1" />
			<input type="hidden" name="task_id" value ="<?php print $task_id;?>" />
			<input type="submit" name="btnUpdateTask" value ="<?php print $header;?>" class="btn btn-primary" />
		</div>

		<div class="alert alert-danger" style="display:none; margin-top:10px;" id="error_general">
			Please fix the errors above before proceeding
		</div>

	</form>

</div>

