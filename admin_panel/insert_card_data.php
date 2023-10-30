<?php
$conn = mysqli_connect("localhost", "root", "", "javed_portfolio");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardTitle = $_POST['cardTitle'];
    $cardDesc = $_POST['cardDesc'];

    $sql = "INSERT INTO service (service_title, service_desc) VALUES ('$cardTitle', '$cardDesc')";

    if (mysqli_query($conn, $sql)) {
        echo "Card data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
