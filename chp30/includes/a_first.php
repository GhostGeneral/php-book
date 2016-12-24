<?php
	session_start();
	ob_start();	

	// *****************************
	// START Database connection
	// *****************************
	$host = "localhost";
	$user = "";
	$password = "";

	// connect to the database server
	$db1 = mysqli_connect($host, $user, $password) 
			or die("Could not connect to database");

	// select the right database
	mysqli_select_db($db1, "MyDatabaseName");

	// *****************************
	// END Database connection
	// *****************************

	// Make passwords stronger
	$SaltForPasswordEncryption = "put-anything-here";
	
	include "layouts.php";
	include "a_functions.php";
	include "current_user.php";
?>