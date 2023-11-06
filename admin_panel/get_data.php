<?php
require("shared/config.php");
$result = mysqli_query($conn, 'SELECT * FROM `service`');

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Convert the data to JSON format
echo json_encode($data);
?>
