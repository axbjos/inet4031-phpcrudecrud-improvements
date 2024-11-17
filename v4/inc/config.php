<?php       

    //if the page using this config did not set a CONFIG constant, throw an error to the user
    //it might indicated something is message up, like the config file isn't there anymore
    //doing it this way we can control what the user sees
    if(!defined('__CONFIG__')){
        exit("Site Not Working - Contact Tech Support");
    }

    //include the database class files
    //one for connection to the users db
    //one for connection to the employee db
    include_once "classes/user_database.php";
    include_once "classes/emp_database.php";

    //then instantiate a new db connections using the getConnection function in the database class.
    $user_con = user_database::getConnection();
    $emp_con = emp_database::getConnection();

    //OLD DB credentials section when using mysqli
    //$servername = "localhost";      //mysql is on the same host as apache
    //$dbname = "employees";          //which db you're going to use
    //$username = "phpuser1";
    //$password = "abc123";

?>
