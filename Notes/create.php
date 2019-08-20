<?php

// Sanitizing

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER);
$date = filter_var($_GET['date'], FILTER_SANITIZE_NUMBER);
$title = filter_var($_GET['title'], FILTER_SANITIZE_STRING);
$note = filter_var($_POST['note'], FILTER_SANITIZE_STRING);

$sql = "INSERT INTO Notes (id, date, titel, note)
VALUES ('$id', '$date', '$titel' '$note')";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// Validate 

// $clean_note = filter_var($note, FILTER_SANITIZE_STRING);
// $clean_title = filter_var($titel, FILTER_SANITIZE_STRING);
// $clean_date = filter_var($date, FILTER_SANITIZE_NUMBER)

if (empty($titel)) {
    echo 'a title is required';
    } else {
    echo 'title is valid '.'<br>';
    }
    if (empty($date)) {
        echo 'a date is required';
    } else {
        echo 'date is valid';
    }


    // execute 

    if (empty($note)) {
        echo 'a note is required';
        } else {
        echo 'note is valid'.'<br>';
        }
?>