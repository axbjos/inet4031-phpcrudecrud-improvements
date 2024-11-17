<?php
	define('__CONFIG__',true);
	require_once "inc/config.php";
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Employee Management System v4.0</title>
		<link rel="stylesheet" href="./stylesheet/mystyle.css">
	</head>
<!-- Body -->
	<body>
		<!-- title bar and nav bar moved to a separate file, so changes only need to be made once -->
		<?php 
			require_once("common/titlenavbar.php");
		?>
		<h3>Data-Driven Dynamic Web Application</h3>
		<hr>
		<br/>
		This application is implemented on a classic LAMP Stack:
		<ul>
			<li>Ubuntu Linux 20.04</li>
			<li>Apache 2 Web Server</li>
			<li>MariaDB distribution of MySQL</li>
			<li>PHP Programming Language</li>
		</ul>
		<p>The application allows the user to interact with and manage a Database Schema sourced from the "Data Charmer"
		repo on GitHub.</p>
		<p>All CRUD: Create, Retrieve, Update, and Delete Operations are present in the menu above</p>
		<p>The database is loaded with a sample 300,000 record database.</p>
		<p>Website styling is controlled by a combination of external and inline Cascading Style</p>
		<br/>
		<hr>
		<br/>
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
