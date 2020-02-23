<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "Austin6200!";
$dbname = "austinleath";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST["email"]));

if(isset($_POST["email"])) {
  $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST["email"]));
} else {
  $email = null;
}

$emailcheck = "SELECT email FROM users WHERE email ='" . $email . "'";
$emailresult = $conn->query($emailcheck);

if($email == null) {
  echo "";
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo '<div class="alert-box ss-error hideit"> <p>Error, invalid email.</p> <i class="fa fa-times close"></i> </div>';
} else if($emailresult->num_rows > 0) {
  echo '<div class="alert-box ss-notice hideit"> <p>This email is already subscribed.</p> <i class="fa fa-times close"></i> </div>';
} else {
  echo '<div class="alert-box ss-success hideit"> <p>You are now subscribed.</p> <i class="fa fa-times close"></i> </div>';
  $sql = "INSERT INTO users (email) VALUES ('$email')";
  $conn->query($sql);
}

$conn->close();
?>
