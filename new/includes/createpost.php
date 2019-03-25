<?php
function mysqlconnection() {
  $database_name = 'austinleath';
  $database_user = 'wpadmin';
  $database_pass = 'wpadmin';
  return mysqli_connect('localhost', $database_user, $database_pass, $database_name);
}

$conn = mysqlconnection();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$password = $_POST["password"];
$filename = $_POST["filename"];

if(empty($password)) {
  $conn->close();
} else if($password != "sadiepiper1") {
  echo '<div class="alert-box ss-error hideit"> <p>The password you entered was incorrect. Please try again.</p> <i class="fa fa-times close"></i> </div>';
  $conn->close();
} else if(empty($filename)) {
  echo '<div class="alert-box ss-error hideit"> <p>You must fill complete the entire form to create a post.</p> <i class="fa fa-times close"></i> </div>';
  $conn->close();
} else if(file_exists("$filename" . ".php")) {
  echo '<div class="alert-box ss-error hideit"> <p>The file you are trying to create already exists.</p> <i class="fa fa-times close"></i> </div>';
  $conn->close();
} else {
  copy('template.php',"$filename" . ".php");
  echo '<div class="alert-box ss-success hideit"> <p>New file created successfully. The file that was created was:  '. $filename . '.php' . ' and is located <a href="/blog/'. $filename .'.php">here</a></p> <i class="fa fa-times close"></i> </div>';
  $conn->close();
}
?>
