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

$sql = "INSERT INTO material (name, subject, standard, type, file)
VALUES ('$_POST[name]', '$_POST[subject]', '$_POST[standard]', '$_POST[type]', '$_POST[file]')";

if (mysqli_query($conn, $sql)) {
  echo "string";;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
