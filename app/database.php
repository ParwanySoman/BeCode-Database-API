<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$database = require "config.php";

$dbhost="localhost";
$dbuser = "admin"; 
$dbpass = $database['DataBase']['password'];
$db = "Notes"; 

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "DB connected.";
}
?> 