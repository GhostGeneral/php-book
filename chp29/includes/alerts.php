<?php if ($_GET['action'] == "user-added") { ?>
	<div class="alert alert-success" style="margin-top:10px;">
		The user was successfully added!
	</div>
<?php } ?>

<?php if ($_GET['action'] == "user-updated") { ?>
	<div class="alert alert-success" style="margin-top:10px;">
		The user was successfully updated!
	</div>
<?php } ?>

<?php if ($_GET['action'] == "user-deleted") { ?>
	<div class="alert alert-success" style="margin-top:10px;">
		The user was successfully deleted!
	</div>
<?php } ?>


<?php if ($_GET['action'] == "task-added") { ?>
	<div class="alert alert-success" style="margin-top:10px;">
		The task was successfully added!
	</div>
<?php } ?>

<?php if ($_GET['action'] == "task-updated") { ?>
	<div class="alert alert-success" style="margin-top:10px;">
		The task was successfully updated!
	</div>
<?php } ?>

<?php if ($_GET['action'] == "task-deleted") { ?>
	<div class="alert alert-success" style="margin-top:10px;">
		The task was successfully deleted!
	</div>
<?php } ?>

<?php if ($_GET['action'] == "invalid-login") { ?>
	<div class="alert alert-danger" style="margin-top:10px;">
		Invalid Login
	</div>
<?php } ?>

<?php if ($_GET['action'] == "signed-out") { ?>
	<div class="alert alert-success" style="margin-top:10px;">
		You have been signed out
	</div>
<?php } ?>

<?php if ($_GET['action'] == "not-authorized") { ?>
	<div class="alert alert-danger" style="margin-top:10px;">
		Please log in first
	</div>
<?php } ?>
