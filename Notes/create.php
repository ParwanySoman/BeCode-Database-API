<?php

// Sanitizing
$titel = filter_var($_GET['titel'], FILTER_SANITIZE_STRING);
$note = filter_var($_POST['note'], FILTER_SANITIZE_STRING);

$dbhost = "localhost";
$dbuser = "admin"; // the username i.e. root and $dbpass will be the password which is the same that you used to access your phpmyadmin.
$dbpass = "8sVRwWmEMQ7g";
$db = "Notes"; // the name of your database which we have created in this tutorial.


$sql = "INSERT INTO Notes (date, title, note) VALUES ('2019/02/02 18:33:55', 'soman', 'something')";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// Validate 

// $clean_note = filter_var($note, FILTER_SANITIZE_STRING);
// $clean_title = filter_var($titel, FILTER_SANITIZE_STRING);
// $clean_date = filter_var($date, FILTER_SANITIZE_NUMBER)

// if ($clean_title === false) {
//     echo 'a title is required';
//     } else {
//     echo 'title is valid '.'<br>';
//     }
//     if (empty($date)) {
//         echo 'a date is required';
//     } else {
//         echo 'date is valid';
//     }


//     // execute 

//     if (empty($note)) {
//         echo 'a note is required';
//         } else {
//         echo 'note is valid'.'<br>';
//         }

?>