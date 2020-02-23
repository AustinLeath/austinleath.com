<?php
$servername = "localhost";
$dbusername = "wpadmin";
$dbpassword = "wpadmin";
$dbname = "austinleath";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$password = htmlspecialchars(mysqli_real_escape_string($conn,$_POST["password"]));
$filename = htmlspecialchars(mysqli_real_escape_string($conn,$_POST["filename"]));

if(empty($password)) {
  echo "";
} else if($password != "test") {
  echo '<div class="alert-box ss-error hideit"> <p>The password you entered was incorrect. Please try again.</p> <i class="fa fa-times close"></i> </div>';
} else if(empty($filename)) {
  echo '<div class="alert-box ss-error hideit"> <p>You must fill complete the entire form to delete a post.</p> <i class="fa fa-times close"></i> </div>';
} else if(!file_exists("$filename" . ".php") or $filename == "deletepost" or $filename == "createpost" or $filename == "contact" or $filename == "about" or $filename == "delete" or $filename == "unsubscribe") {
  echo '<div class="alert-box ss-error hideit"> <p>The file you are trying to delete does not exist or cannot be deleted.</p> <i class="fa fa-times close"></i> </div>';
} else {
  unlink("$filename" . ".php");
  echo '<div class="alert-box ss-success hideit"> <p>File deleted successfully.</p> <i class="fa fa-times close"></i> </div>';
}
$conn->close();
?>
