<?php
require("../shared/config.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $teamTitle = $_POST["team-title"];
    $teamDesc = $_POST["team-desc"];
    $teamImg = $_FILES["team-img"];

    // Handle image upload and move the image file to a specified directory
    $targetDir = "../uploads/";
    $targetFile = $targetDir . basename($teamImg["name"]);

    if (move_uploaded_file($teamImg["tmp_name"], $targetFile)) {
        // Insert the team member data into the database
        $query = "INSERT INTO team (team_name, team_desc, team_img) VALUES ('$teamTitle', '$teamDesc', '$targetFile')";

        if (mysqli_query($conn, $query)) {
            echo "Team member added successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Image upload failed.";
    }
} else {
    echo "Invalid request method.";
}
?>
