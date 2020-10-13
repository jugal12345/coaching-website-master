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

$sql = "INSERT INTO teachers (id, name, email, cnumber, password, subject, standard)
VALUES ('$_POST[id]', '$_POST[name]', '$_POST[email]', '$_POST[cnumber]', '$_POST[password]', '$_POST[subject]', '$_POST[standard]')";

if (mysqli_query($conn, $sql)) {
  header("Location: index.html");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
