<?php
require("../shared/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $newTitle = $_POST["servicetitle"];
    $newDescription = $_POST["servicedesc"];

    // Perform the UPDATE operation based on the provided $id
    $query = "UPDATE `service` SET service_title = '$newTitle', service_desc = '$newDescription' WHERE `service_id` = $id";

    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
