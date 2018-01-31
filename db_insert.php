<?php require_once("connection.php") ?>
<?php 
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$id    = $_POST['Id'];
	$query = "INSERT INTO Info (First_name, Last_name, Id) VALUES( '$fname','{$lname}', '{$id}' ) ";
    $dbinsert = mysqli_query($connection,$query);
    if ($dbinsert) {
    	echo "Data insert Successful !";
    } else {
    	die("Database insert error ! " .mysqli_error($connection) );
    }
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Our Project CSE301</title>
</head>
<body>
	<button><a href="http://localhost/cse301/insert.php">Go back</a></button>
</body>
</html>

<?php mysqli_close($connection) ?>