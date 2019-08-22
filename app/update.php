<?php

$dbhost="localhost"; //the host where your server is running it is usually localhost.
$dbuser = "admin"; // the username i.e. root and $dbpass will be the password which is the same that you used to access your phpmyadmin.
$dbpass = "5Iz1udaCSyoY";
$db = "Notes"; // the name of your database 

$update = "UPDATE Notes SET title='Doe' WHERE id=2";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (mysqli_query($connection, $update)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connection);
}
?>