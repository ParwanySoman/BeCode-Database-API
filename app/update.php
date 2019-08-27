<?php
require "database.php";

$title = filter_var($_GET['title'], FILTER_SANITIZE_STRING);
$note = filter_var($_POST['content'], FILTER_SANITIZE_STRING);
$update = "UPDATE Notes SET content='$note' WHERE title='$title'";

if (mysqli_query($connection, $update)) {
    
    echo "Record updated successfully";
}   else {
     echo "Error updating record:" . mysqli_error($connection);
}









?> 