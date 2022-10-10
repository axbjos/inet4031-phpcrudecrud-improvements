<?php       

    //if the page using this config did not set a CONFIG constant, throw an error to the user
    //it might indicated something is message up, like the config file isn't there anymore
    //doing it this way we can control what the user sees
    if(!defined('__CONFIG__')){
        exit("Site Not Working - Contact Tech Support");
    }

    //DB credentials section
    $servername = "localhost";      //mysql is on the same host as apache
    $dbname = "employees";          //which db you're going to use
    $username = "phpuser1";
    $password = "abc123";

?>
