<?php require_once("../connection.php") ?>
<?php 
	
		$up_id    = $_POST['uid'];
		$db_column= $_POST['column'];
		$db_value= $_POST['value'];

        $db_column = mysqli_escape_string($connection,$db_column);
        $db_value = mysqli_escape_string($connection,$db_value);
        $up_id = mysqli_escape_string($connection,$up_id);

	$up_query = "UPDATE Info SET $db_column='$db_value' WHERE Id= '$up_id' ";
    $update = mysqli_query($connection,$up_query);
    if ($update) {
    	header("Location: ../db_update.php");
    	exit;
    } else {
    	die("Database insert error ! " .mysqli_error($connection) );
    }

 ?>