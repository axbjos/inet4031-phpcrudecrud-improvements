<?php

	define('__CONFIG__',true);
	require_once "inc/config.php";

    //this is the php object oriented style of creating a mysql connection
	$conn = new mysqli($servername, $username, $password, $dbname);  
	
	//check for connection success
	if ($conn->connect_error) {
		die("MySQL Connection Failed: " . $conn->connect_error);
	}
		
	//pull the attribute that was passed with the html form GET request and put into a local variable.
	$emp_id = $_GET["emp_id"];
		
	//create the SQL select statement, notice the funky string concat at the end to variablize the query
	//based on using the GET attribute
	$sql = "SELECT * FROM employees where emp_no like '%".$emp_id."%'";
	
	//put the resultset into a variable, again object oriented way of doing things here
	$result = $conn->query($sql);
	
	//if there were no records found say so, otherwise create a while loop that loops through all rows
	//and echos each line to the screen. You do this by creating some crazy looking echo statements
	// in the form of HTMLText . row[column] . HTMLText . row[column].   etc...
	// the dot "." is PHP's string concatenator operator

	echo "<table style=\"width:75%\">";
	echo "<tr><td><strong>First Name</strong></td><td><strong>Last Name</strong></td><td><strong>Birth Date</strong></td><td><strong>Hire Date</strong></td><td><strong>Gender</strong></td></tr>";

	if ($result->num_rows > 0){
		//print rows
		while($row = $result->fetch_assoc()){
			echo "<tr><td>" . $row["first_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $row["birth_date"]. "</td><td>" . $row["hire_date"]. "</td><td>" .$row["gender"]. "</td></tr>";
		}
	} else {
		echo "No Records Found";
	}	

	echo "</table>";

	//always close the DB connections, don't leave 'em hanging
	$conn->close();

?>