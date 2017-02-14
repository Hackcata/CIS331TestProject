<?php
//use to connect to dbstudent with user password

//define the variables
$host = "localhost";
$username = "ethan";
$password = "password";
$db_name = "dbstudent";

$db = mysqli_connect($host, $username, $password, $db_name);

$connection_error = $db->connect_error;

if ($connection_error != null)
    {
        echo "<p>Error connecting to database: $connection_error</P>";
        exit();
    }



