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
$sql = "CREATE TABLE teachers (
id VARCHAR(6) NOT NULL PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(300) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL,
subject VARCHAR(10) NOT NULL,
standard VARCHAR(2) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table buyers created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
