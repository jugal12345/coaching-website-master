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

$sql = "SELECT id, password, course, standard FROM students WHERE id='$_POST[id]'AND password='$_POST[password]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if ($row["course"]==pcm){
      if($row["standard"]==11){
        header("Location: pcm11homepage.php");
      }
      else{
        header("Location: pcm12homepage.php");
      }
    }
    else{
      if($row["standard"]==11){
        header("Location: pcb11homepage.php");
      }
      else{
        header("Location: pcb12homepage.php");
      }
    }
    break;
  }
} else {
  header("Location: index.html");
}

mysqli_close($conn);
?>
