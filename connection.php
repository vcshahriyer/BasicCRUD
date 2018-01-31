<?php 
	
	$dbhost = "localhost";
	$dbuser = "cse301";
	$dbpass = "secret";
	$dbname = "students";
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	// Connection checking.
	if(mysqli_connect_errno()) {
		die("Database connection failed: " .
			mysqli_connect_error(). "(" . mysqli_connect_errno() .")"
		);
	}


 ?>
