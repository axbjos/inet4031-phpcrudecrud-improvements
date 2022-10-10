<!-- This page is for testing login functionality -->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Employee Management System v4.0</title>
		<link rel="stylesheet" href="./stylesheet/mystyle.css">
	</head>
<!-- Body -->
	<body>
		<!-- title bar-->
		<h2>Employee Management System v2.0</h2>
		<!-- navigation bar
		<ul id="main_menu">
			<li><a class="active">Select an Operation:</a></li>
			<li><a href="addemployee.html">Add Employee Record</a></li>
			<li><a href="findemployeeajax2.html">Search Employee Record</a></li>
			<li><a href="updateemployee.html">Update Employee Record</a></li>
			<li><a href="deleteemployee.html">Delete Employee Record</a></li>
		</ul> -->
		<h3>Data-Driven Dynamic HTML Application</h3>
		<hr>
		<br />
		<h4>Please login:</h4>
		<br />
		<form action="login.php">
			Username:
			<br />
			<input type="text" name="username" value="">
			<br />
			<br />
			Password:
			<br />
			<input type="text" name="password">
			<br />
			<br />
			<input type="submit" value="Submit">
		  </form>
		<br />
		<br />
		<?php

    		session_start();
    		$sess_val = session_id();
    		echo $sess_val;
			in


		?>
		  This application is implemented on a classic LAMP Stack:
		<ul>
			<li>Ubuntu Linux 20.04</li>
			<li>Apache 2 Web Server</li>
			<li>MariaDB distribution of MySQL</li>
			<li>PHP Programming Language</li>
		</ul>
		<hr>
		<br />
		To view older major versions of this website, replace "v4" in the ULR above with one of the following:
		<ul>
			<li>v3 - Vertical Navigation Bar, Improved Functionality, AJAX shown as an example</li>
			<li>v2 - No CSS, Improved Functionality</li>
			<li>v1 - The orginal app from 2020</li>
		</ul>
		<hr>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<footer id="axnet_footer">2022 AxnetLabs, LLC</footer>
	</body>
</html>
