<?php
$servername = "localhost";
$dbusername = "wpadmin";
$dbpassword = "wpadmin";
$dbname = "austinleath";

$password = $_POST["password"];

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$deregisteremail = mysqli_real_escape_string($conn,$_POST["deregisteremail"]);
$emailcheck = "SELECT email FROM users WHERE email ='" . $deregisteremail . "'";
$emailresult = $conn->query($emailcheck);

if($deregisteremail == "") {
} else if(!filter_var($deregisteremail, FILTER_VALIDATE_EMAIL)) {
  echo '<div class="alert-box ss-error hideit"> <p>Failed, The text you entered is not an actual email.</p> <i class="fa fa-times close"></i> </div>';
} else if($emailresult->num_rows == 0) {
  echo '<div class="alert-box ss-notice"> <p>This email has either already been unsubscribed or was never subscribed.</p> <i class="fa fa-times close"></i> </div>';
} else if($emailresult->num_rows > 0) {
  echo '<div class="alert-box ss-success hideit"> <p>This email has been unsubscribed.</p> <i class="fa fa-times close"></i> </div>';
  $sql = "DELETE FROM users WHERE email = '" . $deregisteremail . "'";
  $conn->query($sql);
}

$conn->close();
?>
