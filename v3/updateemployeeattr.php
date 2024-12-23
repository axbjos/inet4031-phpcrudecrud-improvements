<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Employee Management System v3.0</title>
	<link rel="stylesheet" href="./stylesheet/mystyle.css">
</head>

<body>
	<!-- title bar-->
	<h2>Employee Management System v3.0</h2>
	<!-- navigation bar -->
	<ul id="main_menu">
		<li><a class="active" href="index.html">Home</a></li>
		<li><a href="addemployee.html">Add Employee Record</a></li>
		<li><a href="findemployeeajax2.html">Search Employee Record</a></li>
		<li><a href="updateemployee.html">Update Employee Record</a></li>
		<li><a href="deleteemployee.html">Delete Employee Record</a></li>
	</ul>
	<h3>Update Record Status</h3>
	<hr>
	<br />
		<?php
        //access credentials fils
        include 'credentials.php';
		
		//this is the php object oriented style of creating a mysql connection
		$conn = new mysqli($servername, $username, $password, $dbname);  
	
		//check for connection success
		if ($conn->connect_error) {
			die("MySQL Connection Failed: " . $conn->connect_error);
		}
		echo "MySQL Connection Succeeded<br><br>";
		
		//pull the attribute that was passed with the html form GET request and put into a local variable.
		$emp_attr = $_GET["emp_attr"]; // "birth_date"
		$new_val = $_GET["new_val"];   // "1979-05-12"
        $emp_no = $_GET["emp_no"];     // 500000

		//echo $emp_attr;
		//echo $new_val;
		//echo $emp_no;

		echo "Updating: " . $emp_attr . " to " . $new_val;
	
		echo "<br><br>";
		
		//create the SQL select statement, notice the funky string concat at the end to variablize the query
		//based on using the GET attribute
		$sql = "UPDATE employees SET ".$emp_attr." = '".$new_val."' where " .$emp_no. " = '".$emp_no."'";

		//run the update
                if ($conn->query($sql) === TRUE){

                        echo "Employee Update Completed";

                } else {

                        echo "Error: " . $sql . "<br>" . $conn->error;

                }	
		
		//always close the DB connections, don't leave open 
		$conn->close();
		
	?>
	<br />
	<br />
	<br />
<footer id="axnet_footer">2024 AxnetLabs, LLC</footer>
</body>
</html>
