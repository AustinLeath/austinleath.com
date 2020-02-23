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

$emailcheck = "SELECT email FROM users";
$emailresult = $conn->query($emailcheck);

if($password == "") {
  echo "";
} else if($password != "test") {
  echo '<div class="alert-box ss-error hideit"> <p>The password you entered was incorrect, please try again.</p> <i class="fa fa-times close"></i> </div>';
} else if($emailresult->num_rows == 0) {
  echo '<div class="alert-box ss-notice hideit"> <p>There are no users subscribed yet.</p> <i class="fa fa-times close"></i> </div>';
} else {
   echo '
   <table>
   <thead>
      <tr>
       <th>Emails</th>
      </tr>
   </thead>
   <tbody>
   ';
    while($row = $emailresult->fetch_assoc()) {
      echo "<tr><td>" . $row["email"] . "</td></tr>";
    }
    echo '
    </tbody>
    </table>
    ';
}
$conn->close();
?>
