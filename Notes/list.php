<?php
$sql = "SELECT * FROM Notes";
$result = mysqli_query($connection, $sql);
$json_array = array();
while($row = mysqli_fetch_assoc($result)) {
$json_array[] = $row;
}
echo json_encode($json_array).'<br>';

?>