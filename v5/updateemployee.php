<?php
	define('__CONFIG__',true);
	require_once "inc/config.php";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Employee Management System v2.0</title>
    <link rel="stylesheet" href="./stylesheet/mystyle.css">
  </head>
  <!-- Body of the doc -->
  <body>
    <?php 
			require_once("common/titlenavbar.php");
		?>
		<h3>Update Employee Record</h3>
    <hr>
    <br />
    <form action="updateemployeeback.php">
      Search by Employee ID Number: (results displayed on next screen)<br><br>
      <input type="text" name="emp_id" value="500000">
      <br><br>
      <input type="submit" value="Submit">
    </form>
    <br />
    <br />
    <br />
    <br />
    <br />
    <footer id="axnet_footer">2022 AxnetLabs, LLC</footer>
  </body>
</html>
