<?php

//database connection file
Class Database {
    var $con;

    public function __construct()//the method name for the constructor. Called on an object after it has been created
    {
        //parses a config file and returns the file
        $db = parse_ini_file("dbconfig.ini");
        //new way of writing our db connection so you our php files aren't as readable
        $this->con = mysqli_connect($db["host"], $db["username"], $db["password"], $db["database"]);
    }
}

?>