<?php
	define('__CONFIG__',true);
	require_once "inc/config.php";

	//start a session in the browser
	ob_start();
	session_start();

?>

<!-- Login page -->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Employee Management System v4.0</title>
		<link rel="stylesheet" href="./stylesheet/mystyle.css">
		<script src="assets/js/login.js"></script>
	</head>
<!-- Body -->
	<body>
		<!-- title bar-->
		<h2>Employee Management System v4.0</h2>
		<h3>Data-Driven Dynamic Web Application</h3>
		<hr>
		<br />
		<div>
		<?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'axbjos' && 
                  $_POST['password'] == 'abc123') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'axbjos';
                  
                  $msg = 'You have entered a valid user name and password';
				  header("Location: main.php");

               } else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      	</div> 
		<h4>Please login:</h4>
		<br />
		<form role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
			Username:
			<br />
			<input type="text" name="username" value="">
			<br />
			<br />
			Password:
			<br />
			<input type="password" name="password">
			<br />
			<br />
			<button type="submit" name="login">Login</button>
		</form>
		<br />
		<?php echo $msg; ?>
		<br />
			Click here to clean <a href = "inc/logout.php" tite = "Logout">Session.
		<br />
		<br />
		  This application is implemented on a classic LAMP Stack:
		<ul>
			<li>Ubuntu Linux 24.04</li>
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
