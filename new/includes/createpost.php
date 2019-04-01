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
} else if($password != "sadiepiper1") {
  echo '<div class="alert-box ss-error hideit"> <p>The password you entered was incorrect. Please try again.</p> <i class="fa fa-times close"></i> </div>';
} else if(empty($filename)) {
  echo '<div class="alert-box ss-error hideit"> <p>You must fill complete the entire form to create a post.</p> <i class="fa fa-times close"></i> </div>';
} else if(file_exists("$filename" . ".php")) {
  echo '<div class="alert-box ss-error hideit"> <p>The file you are trying to create already exists.</p> <i class="fa fa-times close"></i> </div>';
} else {
  copy('template.php',"$filename" . ".php");
  echo '<div class="alert-box ss-success hideit"> <p>New file created successfully. The file that was created was:  '. $filename . '.php' . ' and is located <a href="/'. $filename .'.php">here</a></p> <i class="fa fa-times close"></i> </div>';
}
$conn->close();
?>
