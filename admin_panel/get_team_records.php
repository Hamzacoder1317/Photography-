<?php
$conn = mysqli_connect("localhost", "root", "", "javed_portfolio");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch records from the database
$sql = "SELECT * FROM team";
$result = mysqli_query($conn, $sql);

$data = array(); // Create an array to store the records

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row; // Add each row to the data array
    }
}

mysqli_close($conn);

// Encode the data as JSON and send it to the client
echo json_encode($data);
?>
