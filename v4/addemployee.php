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

<body>
    <?php 
      require_once("common/titlenavbar.php");
    ?>
    <h3>Add Employee Record</h3>
    <hr>
    <h4>This will add a record to the employee table in the MySQL Database</h4>
    Example data is pre-populated below:
    <br /><br />
    <!-- here is the start of the form -->
    <form action="addemployeeback.php">
      Last name:<br>
      <input type="text" name="last_name" value="Weedman">
      <br><br>
      First Name:<br>
      <input type="text" name="first_name" value="Josphine">
      <br><br>
      Birth date:<br>
      <input type="text" name="birth_date" value="1969-05-30">
      <br><br>
      Hire date:<br>
      <input type="text" name="hire_date" value="1999-05-30">
      <br><br>
      Gender:<br>
      <input type="text" name="gender" value="F">
      <br><br>
      Employee number:<br>
      <input type="text" name="emp_no" value="500000">
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
