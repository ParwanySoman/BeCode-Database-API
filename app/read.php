<?php

$dbhost="localhost"; //the host where your server is running it is usually localhost.
$dbuser = "admin"; // the username i.e. root and $dbpass will be the password which is the same that you used to access your phpmyadmin.
$dbpass = "5Iz1udaCSyoY";
$db = "Notes"; // the name of your database which we have created in this tutorial.
//creating connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

$select = "SELECT * FROM Notes";
$result = mysqli_query($connection, $select);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
?>