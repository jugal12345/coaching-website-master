<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coaching";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "MODULES <BR>";
$sql = "SELECT name, file
FROM material WHERE standard=11 AND type='module'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
echo "<table>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
  //  echo "<tr><td>".$row["pfile"]."</td><br><td>".$row["pcategory"]." ".$row["pprice"]."</td></tr><br>";
$pfile = $row["file"];
$name = $row["name"];

echo "<html>
<head>

<title></title>
</head>
<body style='background-color:floralwhite;'>";

//echo "$pfile";

//echo"<img src = \"abcs.png\" height = 60px style = \"float:left; margin-top: 15px;\">";

Echo "<a href=\"$pfile\">abc   </a><br>";
echo "$name";

echo "<br />";




}
} else {
  echo "0 results";
}

echo "</body></html>";
echo "ASSIGNMENTS <BR>";
$sql = "SELECT name, file
FROM material WHERE standard=11 AND type='test'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
echo "<table>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
  //  echo "<tr><td>".$row["pfile"]."</td><br><td>".$row["pcategory"]." ".$row["pprice"]."</td></tr><br>";
$pfile = $row["file"];
$name = $row["name"];

echo "<html>
<head>

<title></title>
</head>
<body style='background-color:floralwhite;'>";

//echo "$pfile";

//echo"<img src = \"abcs.png\" height = 60px style = \"float:left; margin-top: 15px;\">";

Echo "<a href=\"$pfile\">abc   </a><br>";
echo "$name";

echo "<br />";




}
} else {
  echo "0 PENDING";
}

echo "</body></html>";

$conn->close();
?>
