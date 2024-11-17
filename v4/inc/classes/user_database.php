<?php

if(!defined('__CONFIG__')){
    exit("Site Not Working - Contact Tech Support");
}

class user_database {

    protected static $user_con;

    //magic method, called when new object created
    private function __construct() {

        try {

            //not using mysqli - using a more advanced way that the old code
            self::$user_con = new PDO( 'mysql:host=localhost;port=3307;dbname=users', 'phpuser1', 'abc123' );
            self::$user_con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$user_con->setAttribute( PDO::ATTR_PERSISTENT, false);

            //echo "Connected to the database";

        } catch (PDOException $e) {

            echo "Could not connect to database";
        
        }

    }

    public static function getConnection() {

        if (!self::$user_con) {
            new user_database();
        }

        return self::$user_con;
    }

}

?>
