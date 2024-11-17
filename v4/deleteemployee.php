<?php
	define('__CONFIG__',true);
	require_once "inc/config.php";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Employee Management System v3.0</title>
    <link rel="stylesheet" href="./stylesheet/mystyle.css">
  </head>

  <body>
    <?php 
			require_once("common/titlenavbar.php");
		?>
		<h3>Delete Employee Record</h3>
    <hr> <!-- This is the hr tag, or "horizonatal reference" -->
    <br>
    <form action="deleteemployeeback.php">
      Delete by Employee Number (Action is Immediate!):<br><br>
      <input type="text" name="emp_no" value="500000">
      <br><br>
      <input type="submit" value="Submit">
    </form>
    <br /> <!-- This is the hr tag, or "horizonatal reference" -->
    <br />
    <br />
		<br />
		<footer id="axnet_footer">2022 AxnetLabs, LLC</footer>
  </body>
</html>
