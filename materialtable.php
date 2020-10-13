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
$sql = "CREATE TABLE material (
name VARCHAR(50) NOT NULL,
subject VARCHAR(10) NOT NULL,
standard VARCHAR(2) NOT NULL,
type VARCHAR(10) NOT NULL,
file VARCHAR(100) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table buyers created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
