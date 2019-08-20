<?php 

$dbhost="localhost"; //the host where your server is running it is usually localhost.
$dbuser = "admin"; // the username i.e. root and $dbpass will be the password which is the same that you used to access your phpmyadmin.
$dbpass = "8sVRwWmEMQ7g";
$db = "Notes"; // the name of your database which we have created in this tutorial.


//creating connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

//checking connection and creating database
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "DB connected.";
}


//variables of the elements
$date = filter_var($_GET['date'], FILTER_SANITIZE_NUMBER);
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER);
$title = filter_var($_GET['title'], FILTER_SANITIZE_STRING);
$note = filter_var($_POST['note'], FILTER_SANITIZE_STRING);


// if statement met dat de gebruiker een nieuwe notitie wilt maken

 $connection->close();
?>