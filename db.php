</head>

<body>
	<h1>This is from the MYPRODUCTS database</h1>

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
		
			$sql = mysqli_query ($connection,"SELECT name FROM products");

			echo "<ul id="myListFromDB">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>"

			while ($row = mysqli_fetch_assoc($result)){

				echo "<li>:" . $row['name'];
				echo "<br><li>" . $row['name'];
				echo "<br><li>" . $row['name'];
				echo "<br><li>" . $row['name'];
				echo "<br><li>" . $row['name'];
				echo "<br><li>" . $row['name'];
				echo "<br><li>" . $row['name'];
				echo "<br><li>" . $row['name'];
				 
			}
			echo "</ul>";

			mysql_free_result($result);

			
		 
		 
		//Query Database
			$result = mysqli_query($connection, $sql);
			$row = mysqli_fetch_assoc($result);
			
		//Optional: Output the info to the page. Alternatively, you can store this info using javascript below starting on line 53
			//echo "Value 1 retrieved from Database: " . $row['name'];
			//echo "<br>Value 2 retrieved from Database: " . $row['price'];
			

		
		// Close database connection
			//mysqli_close($connection);
	?>



</body>

</html>

<script>

	//Create a variable called jsvar.
	//The variable is then made equals to value in 'name' column
	//var jsvar = "<?php echo $row['name'] ?>";
	//alert(jsvar);
	//var jsvar2 = "<?php echo $row['price'] ?>";
	//alert(jsvar2);




</script>