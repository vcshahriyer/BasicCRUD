<?php require_once("connection.php") ?>
<?php 

		$query="SELECT * FROM Info";
		$result = mysqli_query($connection,$query);
		if (!$result) {
			die("Database query failed");
		}


?>
<?php include("includes/menue.php") ?>

	<h1 style="margin: 0 auto;width: 40%;text-align: center;color: #00cccc; margin-top: 100px;">Welcome to the student database</h1>


<table>
  <thead>
    <tr>
      <th>First name</th>
      <th>Last name</th>
      <th>ID</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
		while ($row = mysqli_fetch_assoc($result)) {
	?>
    <tr>
      <td><?php echo $row["First_name"]; ?></td>
      <td><?php echo $row["Last_name"]; ?></td>
      <td><?php  $id=$row["Id"]; echo $id; ?></td>
    </tr>
    <?php
		}
	 ?>

  </tbody>
</table>