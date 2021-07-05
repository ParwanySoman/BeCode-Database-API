<?php

$sql = "UPDATE Notes SET lastname='Doe' WHERE id=2";

if (mysqli_query($connection, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connection);
}

?>