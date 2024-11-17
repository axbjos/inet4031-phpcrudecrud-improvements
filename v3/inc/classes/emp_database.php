<?php

if(!defined('__CONFIG__')){
    exit("Site Not Working - Contact Tech Support");
}

class emp_database {

protected static $emp_con;

//magic method, called when new object created
private function __construct() {

    try {

        //not using mysqli - using a more advanced way that the old code
        self::$emp_con = new PDO( 'mysql:host=localhost;port=3307;dbname=employees', 'dbuser', 'abc123' );
        self::$emp_con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$emp_con->setAttribute( PDO::ATTR_PERSISTENT, false);

        //echo "Connected to the database";

    } catch (PDOException $e) {

        echo "Could not connect to database";
    
    }

}

public static function getConnection() {

    if (!self::$emp_con) {
        new emp_database();
    }

    return self::$emp_con;
}

}

?>