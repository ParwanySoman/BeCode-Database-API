<?php 
//admin en wachtwoord moeten in een aparte map zodat het niet zichbaar is. 
echo 'hallo';
function openconnection() {
    $dbhost="localhost"; //the host where your server is running it is usually localhost.
    $dbuser = "admin"; // the username i.e. root and $dbpass will be the password which is the same that you used to access your phpmyadmin.
    $dbpass = "8sVRwWmEMQ7g";
    $db = "Notes"; // the name of your database which we have created.

    $connection = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connection failed: %s\n".$connection -> error); 

return $connection;
}

function CloseConnection($connection)
 {
 $connection -> close();
 }

?> 