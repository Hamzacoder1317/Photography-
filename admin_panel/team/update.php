<?php
require("../shared/config.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $teamTitle = $_POST["teamtitle"];
    $teamDesc = $_POST["teamdesc"];

    // Handle image upload and move the image file to a specified directory
    $targetDir = "../uploads/";

    if (!empty($_FILES["teamimg"]["name"])) {
        $targetFile = $targetDir . basename($_FILES["teamimg"]["name"]);

        if (move_uploaded_file($_FILES["teamimg"]["tmp_name"], $targetFile)) {
            $query = "UPDATE `team` SET `team_name`=?, `team_desc`=?, `team_img`=? WHERE `team_id`=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('sssi', $teamTitle, $teamDesc, $targetFile, $id);

            if ($stmt->execute()) {
                echo "Team member updated successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Image move failed.";
        }
    } else {
        echo "No file uploaded.";
    }
} else {
    echo "Invalid request method.";
}
?>
