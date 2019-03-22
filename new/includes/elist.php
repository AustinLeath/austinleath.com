<?php
function mysqlconnection() {
  $database_name = 'austinleath';
  $database_user = 'wpadmin';
  $database_pass = 'wpadmin';
  return mysqli_connect('localhost', $database_user, $database_pass, $database_name);
}

$password = $_POST["password"];

// Create connection
$conn = mysqlconnection();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$emailcheck = "SELECT email FROM users";
$emailresult = $conn->query($emailcheck);

if($password == "") {
  echo '';
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
  <tr>
  ';

   while($row = $emailresult->fetch_assoc()) {
     echo "<td>" . $row["email"] . "</td>";
   }

   echo '
   </tr>
   </tbody>
   </table>
   ';
}

$conn->close();
?>
