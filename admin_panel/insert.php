<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javed_portfolio";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = file_get_contents("php://input");
$servicedata = json_decode($data, true);
$service_title = isset($servicedata['servicetitle']) ? $servicedata['servicetitle'] : null;
$service_desc = isset($servicedata['servicedesc']) ? $servicedata['servicedesc'] : null;

if (!empty($service_title) && !empty($service_title)) {
  $sqlservice = "INSERT INTO `service`(`service_title`, `service_desc`) VALUES ('$service_title', '$service_desc')";
  
  if (mysqli_query($conn, $sqlservice)) {
    echo "Successfully Insert";
  } else {
    echo "Unable to Insert: ";
  }
} else {
  echo "Fill all fields";
}

mysqli_close($conn);

?>
