<?php

// sql to delete a record
$sql = "DELETE FROM Notes WHERE id=3";

if ($connection->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connection->error;
}

?>