<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coaching";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, password FROM admin WHERE id='$_POST[id]'AND password='$_POST[password]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    header("Location: teacherregister.html");
    break;
  }
} else {
  header("Location: index.html");
}

mysqli_close($conn);
?>
