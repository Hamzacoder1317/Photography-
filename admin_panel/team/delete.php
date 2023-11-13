<?php
require("../shared/config.php");


// Include your database connection code here
// For example: include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    // Perform the DELETE operation based on the provided $id
    $query = "DELETE FROM `team` WHERE team_id = $id";

    if (mysqli_query($conn, $query)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

