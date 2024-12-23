<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Employee Management System v2.0</title>
	
		<!-- a little snippet of Cascading Style Sheet style of formatting for the data table -->
		<!-- create a 1 pixel border, with a collapsed single border -->
		<style>
			table, th, td {
  			border: 1px solid black;
			border-collapse: collapse
			}
		</style>
		<link rel="stylesheet" href="./stylesheet/mystyle.css">
	</head>

	<body>
		<div id=title_bar><h2>Employee Management System v2.0</h2></div>
		<hr>
		<?php
            //access credentials fils
            include 'credentials.php';

			//this is the php object oriented style of creating a mysql connection
			$conn = new mysqli($servername, $username, $password, $dbname);  
		
			//check for connection success
			if ($conn->connect_error) {
				die("<h4>MySQL Connection Failed</h4><br>" . $conn->connect_error);
			}
			echo "<h4>MySQL Connection Succeeded</h4><br>";
			
			//pull the attribute that was passed with the html form GET request and put into a local variable.
			$lastname = $_GET["lastname"];
			echo "Searching for: " . $lastname;
		
			echo "<br><br>";
			
			//create the SQL select statement, notice the funky string concat at the end to variablize the query
			//based on using the GET attribute
			$sql = "SELECT first_name,last_name FROM employees where last_name = '".$lastname."'";
		
			//put the resultset into a variable, again object oriented way of doing things here
			$result = $conn->query($sql);
	
			//if there were no records found say so, otherwise create a while loop that loops through all rows
			//and echos each line to the screen. You do this by creating some crazy looking echo statements
			// in the form of HTMLText . row[column] . HTMLText . row[column].   etc...
			// the dot "." is PHP's string concatenator operator
			// here HTML Table tags are used to create a table and table rows.
			echo "<strong>Employee First and Last Names</strong><br><br>";
			echo "<table style=\"width:25%\">";
			echo "<tr><td><strong>First Name</strong></td><td><strong>Last Name</strong></td></tr>";
			if ($result->num_rows > 0){
				//print rows
				while($row = $result->fetch_assoc()){
					echo "<tr><td>" . $row["first_name"]. "</td><td>" . $row["last_name"]. "</td></tr>";
				}
			} else {
				echo "No Records Found";
			}
			echo "</table>";
			//always close the DB connections, don't leave 'em hanging
			$conn->close();
		
		?>
		<br />
		<br />
		<br />
		<footer id="axnet_footer">2022 AxnetLabs, LLC</footer>
	</body>
</html>
