<?php
require("../shared/config.php");

// Fetch data from the 'service' table
$result = mysqli_query($conn, 'SELECT * FROM `team`');
$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Convert the data to JSON format and send it as a response
header('Content-Type: application/json');
echo json_encode($data);


// ?>
