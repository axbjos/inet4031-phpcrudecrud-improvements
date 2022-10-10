<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<title>Employee Management System v2.0</title>
		<link rel="stylesheet" href="./stylesheet/mystyle.css">
	</head>

	<body>
		<!-- title bar-->
		<h2>Employee Management System v2.0</h2>
		<!-- navigation bar -->
		<ul id="main_menu">
			<li><a class="active" href="index.html">Home</a></li>
			<li><a href="addemployee.html">Add Employee Record</a></li>
			<li><a href="findemployeeajax2.html">Search Employee Record</a></li>
			<li><a href="updateemployee.html">Update Employee Record</a></li>
			<li><a href="deleteemployee.html">Delete Employee Record</a></li>
		</ul>
		<h3>Update an Employee Record</h3>
		<hr>
		<br />
			<?php
        	//access credentials file
        	include 'credentials.php';

			//this is the php object oriented style of creating a mysql connection
			$conn = new mysqli($servername, $username, $password, $dbname);  
		
			//check for connection success
			if ($conn->connect_error) {
				die("MySQL Connection Failed: " . $conn->connect_error);
			}
			echo "MySQL Connection Succeeded<br><br>";
			
			//pull the attribute that was passed with the html form GET request and put into a local variable.
			$emp_id = $_GET["emp_id"];
			echo "Searching for: " . $emp_id;
		
			echo "<br><br>";
			
			//create the SQL select statement, notice the funky string concat at the end to variablize the query
			//based on using the GET attribute
			$sql = "SELECT * FROM employees where emp_no = '".$emp_id."'";
		
			//put the resultset into a variable, again object oriented way of doing things here
			$result = $conn->query($sql);
		
			//if there were no records found say so, otherwise create a while loop that loops through all rows
			//and echos each line to the screen. You do this by creating some crazy looking echo statements
			// in the form of HTMLText . row[column] . HTMLText . row[column].   etc...
			// the dot "." is PHP's string concatenator operaton
	    	
			if ($result->num_rows > 0){
				echo "<table style=\"width:75%\">";
	    	echo "<tr><td><strong>First Name</strong></td><td><strong>Last Name</strong></td><td><strong>Birth Date</strong></td><td><strong>Hire Date</strong></td><td><strong>Gender</strong></td></tr>";
				//print rows
				while($row = $result->fetch_assoc()){
					echo "<tr><td>" . $row["first_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $row["birth_date"]. "</td><td>" . $row["hire_date"]. "</td><td>" .$row["gender"]. "</td></tr>";
				}
				echo "</table>";
			} else {
				echo "<h3>No Records Found</h3>";
				$no_data = 1;  //no record flag
			}
			echo "</table>";
		
			//always close the DB connections, don't leave 'em hanging
			$conn->close();
		
			?>
		<br><br>
			<?php
				$emp_id = $_GET["emp_id"];	
				if ($no_data == 1) {

					//no op

				} else { 
			echo '
			<form action="updateemployeeattr.php">
			<label for="emp_no">Updating data for:</label><br>
			<input type="text" id="emp_no" name="emp_no" value="' . $emp_id . '"><br><br>
			<label for="emp_attr">Which attribute to you want to update?</label>
			<br />
			<select id="emp_attr" name="emp_attr">
			<option value="birth_date">Birth Date</option>
			<option value="hire_date">Hire Date</option>
			<option value="gender">Gender</option>
			<option value="first_name">First Name</option>
			<option value="last_name">Last Name</option>
  			</select>
			<br /><br />
			<label for="newval">New value:</label><br>
  			<input type="text" id="new_val" name="new_val"><br><br>
			<br />
			<input type="submit">
			</form>';
				}
		?>
		<br />
		<br />
		<footer id="axnet_footer">2022 AxnetLabs, LLC</footer>
	</body>
</html>
