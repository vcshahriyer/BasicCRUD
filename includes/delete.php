<?php require_once("../connection.php") ?>
<?php 
	
	$d_id    = $_POST['did'];

	$up_query = "DELETE FROM Info WHERE Id= '$d_id' ";
    $update = mysqli_query($connection,$up_query);
    if ($update) {
    	header("Location: ../db_delete.php");
    	exit;
    } else {
    	die("Database insert error ! " .mysqli_error($connection) );
    }

 ?>