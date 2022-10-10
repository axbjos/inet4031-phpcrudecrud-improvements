<?php
    //access credentials file
    include 'credentials.php';

    //this is the php object oriented style of creating a mysql connection
    $conn = new mysqli($servername, $username, $password, $dbname);  

    //check for connection success
    if ($conn->connect_error) {
        die("<h4>MySQL Connection Failed</h4><br>" . $conn->connect_error);
    } else {
    
    echo "<h4>MySQL Connection Succeeded</h4><hr>";

    }

    $sql = "SELECT session_id FROM employees where user = '".$lastname."'";

    
    $sess_val = session_start();
    $sess_val2 = session_id();

    echo $_SESSION;

    echo $sess_val;
    echo $sess_val2;


?>