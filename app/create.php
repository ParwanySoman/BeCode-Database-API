<?php

// header('Access-Control-Allow-Origin: $');
$dbhost="localhost"; //the host where your server is running it is usually localhost.
$dbuser = "admin"; // the username i.e. root and $dbpass will be the password which is the same that you used to access your phpmyadmin.
$dbpass = "5Iz1udaCSyoY";
$db = "Notes"; // the name of your database 

$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
$note = filter_var($_POST['note'], FILTER_SANITIZE_STRING);


$sql = "INSERT INTO Notes (title, note)
         VALUES ('$title', '$note')";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $db);


if (mysqli_query($connection->query($sql) === TRUE) {
    echo 'New record created succesfully';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

if (!empty($title)) {
    echo "<br> Please fill in a title";
} else {
    echo "Title is valid";
}
if (empty($note)) {
    echo "Please fill in a message";
}
