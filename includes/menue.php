<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
	body{
		margin: 0;
	}
ul {
    list-style-type: none;
    padding: 0;
    overflow: hidden;
    background-color: #00cccc;
    width: 50%;
    margin: 0 auto;
}

li {
    display: inline-block;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-weight: bold;
}

li a:hover {
    background-color: #03c4c4;
}
.fullwidth{
	width: 100%;
	background-color: #00cccc;
	padding-left: 11%;

}
</style>
</head>


<body>
<div class="fullwidth">	

	<ul>
	  <li><a class="active" href="http://localhost/cse301/index.php">Insert</a></li>
	  <li><a href="http://localhost/cse301/db_read.php">Current Database</a></li>
	  <li><a href="http://localhost/cse301/db_update.php">Update</a></li>
	  <li><a href="http://localhost/cse301/db_delete.php">Delete</a></li>
	</ul>

</div>