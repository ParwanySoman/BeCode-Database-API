<?php

require "database.php";

$title = filter_var($_GET['title'], FILTER_SANITIZE_STRING);
$note = filter_var($_POST['content'], FILTER_SANITIZE_STRING);


if($title == TRUE){
    $sql = "INSERT INTO Notes (title, content) VALUES ('$title', '$note')";
    if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
    } }
    

if (!empty($title)) {
    echo "<br> Please fill in a title";
}