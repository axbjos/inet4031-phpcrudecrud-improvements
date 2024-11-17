<?php

	define('__CONFIG__',true);
	require_once "inc/config.php";

	$user_name = $_GET["username"];
	$pass_word = $_GET["password"];
		
	//create the SQL select statement, notice the funky string concat at the end to variablize the query
	//based on using the GET attribute
	$sql = "SELECT user_id FROM users where login_id = '".$user_name."'";
	
	//put the resultset into a variable, again object oriented way of doing things here
	$results = $user_con->query($sql);

	//very different here when using PDO - and simpler
	if ($results){
		//iterate and print rows - using a foreach loop here.  in mysqli we used a while loop
		foreach ($results as $row){
			echo $row['user_id'];
		}
	} else {
		echo "No Records Found";
	}	

?>