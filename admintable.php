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

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS admin (
id VARCHAR(6) NOT NULL PRIMARY KEY,
password VARCHAR(15) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table buyers created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

$sql = "INSERT INTO admin
VALUES ('ADMIN', 'PASSWORD')";

if (mysqli_query($conn, $sql)) {
  echo "added successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
