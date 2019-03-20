<?php
$servername = "localhost";
$dbusername = "wpadmin";
$dbpassword = "wpadmin";
$dbname = "rileighsblog";

$password = $_POST["password"];

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$emailcheck = "SELECT email FROM users";
$emailresult = $conn->query($emailcheck);

if($password == "") {
  echo '';
} else if($password != "sadiepiper1") {
  echo '<div class="alert-box ss-error hideit"> <p>The password you entered was incorrect, please try again.</p> <i class="fa fa-times close"></i> </div>';
} else if($emailresult->num_rows == 0) {
  echo '<div class="alert-box ss-notice hideit"> <p>There are no users subscribed yet.</p> <i class="fa fa-times close"></i> </div>';
} else {
 while($row = $emailresult->fetch_assoc()) {
  echo "<b>EMAIL: </b>" . $row["email"] . "<br>";
 }
}

$conn->close();
?>
