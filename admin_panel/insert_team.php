<?php
$conn = mysqli_connect("localhost", "root", "", "javed_portfolio");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teamTitle = $_POST['teamTitle'];
    $teamDesc = $_POST['teamDesc'];

    $teamImg = $_FILES['teamImg'];
    $uploadPath = "..admin_panel/uploads/" . basename($teamImg['name']);

    if (move_uploaded_file($teamImg['tmp_name'], $uploadPath)) {
        echo "File uploaded successfully to: " . $uploadPath;
    } else {
        echo "File upload failed";
    }

    $sql = "INSERT INTO team (team_name, team_desc, team_img) VALUES ('$teamTitle', '$teamDesc', '$uploadPath')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>