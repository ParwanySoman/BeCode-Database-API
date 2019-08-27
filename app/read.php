<?php

require "database.php"; 

 $select = "SELECT * FROM Notes";
 $result = mysqli_query($connection, $select);
 $json_array = array();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $json_array[] = $row;
        echo " - title: " . $row["title"]. " - text: " . $row["content"]. "<br>";
    }
    echo json_encode($json_array);
} else {
    echo "0 results";
}
?>