<?php
require("../shared/config.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the POST request

$offeruff = $_POST['offeruff'];
$offeruff_day = $_POST['offeruff_day'];

// Update the offer data in the database (adjust the query accordingly)
$sql = "UPDATE `offer` SET `offer_%` = '$offeruff', `offer_day` = '$offeruff_day' WHERE `offer_id` = 1 "; // Adjust the WHERE clause based on your requirements

if ($conn->query($sql) === TRUE) {
    echo "Update successful";
} else {
    echo "Error updating offer data: " . $conn->error;
}

$conn->close();
?>