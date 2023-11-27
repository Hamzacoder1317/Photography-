<?php
require("../shared/config.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'offer' table
$sql = "SELECT `offer_id`, `offer_%`, `offer_day` FROM `offer` WHERE `offer_id` = 1"; // Adjust the WHERE clause based on your requirements
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo "No offer found";
}

$conn->close();
?>