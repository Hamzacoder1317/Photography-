<?php
require("../shared/config.php");

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





// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $teamTitle = $_POST["team-title"];
//   $teamDesc = $_POST["team-desc"];
//   $teamImg = $_FILES["team-img"];

//   // Handle image upload and move the image file to a specified directory
//   $targetDir = "uploads/";
//   $targetFile = $targetDir . basename($teamImg["name"]);

//   if (move_uploaded_file($teamImg["tmp_name"], $targetFile)) {
//       // Insert the team member data into the database
//       $query = "INSERT INTO team (team_name, team_desc, team_img) VALUES ('$teamTitle', '$teamDesc', '$targetFile')";

//       if (mysqli_query($conn, $query)) {
//           echo "Team member added successfully.";
//       } else {
//           echo "Error: " . mysqli_error($conn);
//       }
//   } else {
//       echo "Image upload failed.";
//   }
// }
mysqli_close($conn);
?>
