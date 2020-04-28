<DOCTtype html>
<html>
	


<body>
	

	<?php
	
		//Create a database connection
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpassword = "";
		$dbname = "phonetech_db";

		$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
		
		//Test if connection occoured
		if(mysqli_connect_errno()){
			die("DB connection failed: " .
				mysqli_connect_error() .
					" (" . mysqli_connect_errno() . ")"
					);
		}

		if (!$connection)
			{
				die('Could not connect: ' . mysqli_error());
			}
		
		//Save the Query
		
			$sql = "SELECT NAME FROM PRODUCTS";
			$result = mysqli_query($connection, $sql);
			
			

			echo "<ul id='myListFromDB'>";

			while ($row = mysqli_fetch_assoc($result)){
				echo "<li>" . $row['NAME']; 

				
			}
			echo "</ul>";

			mysqli_free_result($result);

			
		 
		 
		//Query Database
		
			
		//Optional: Output the info to the page. Alternatively, you can store this info using javascript below starting on line 53
			//echo "Value 1 retrieved from Database: " . $row['name'];
			//echo "<br>Value 2 retrieved from Database: " . $row['price'];
			

		
		// Close database connection
		   mysqli_close($connection);
	?>

