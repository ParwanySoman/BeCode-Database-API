<?php

require "database.php";

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $title = $_GET['title'];
    $sql = "DELETE FROM Notes WHERE title='$title'";
    $connection->query($sql);
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }
    
}

?>