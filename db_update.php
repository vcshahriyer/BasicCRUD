<?php include("includes/read.php") ?>
 

	<div class="form-style-6">
		<h1>Update Database</h1>
		<form action="includes/update.php" method="post">

	      	Insert ID where you want to update :<br>
		  <input type="text" name="uid" value="2015-2-60-0##"><br><br>
		    
		    Insert the column name you want to update
		  <input type="text" name="column" value="eg.First_name"><br><br>
		  
		   Insert the value you want to update
		  <input type="text" name="value" value="Value here"><br><br>
		  
		  <input type="submit" value="Submit">

		</form>
	</div>
<p style="text-align: center;color: red;">Note*: Please enter column name as defined like First_name or Last_name or Id oterwise it will not work</p>






<?php include("includes/footer.php") ?>