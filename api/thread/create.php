<?php


// DB info
$servername = 'localhost';
$username = 'id15304214_projectweek';
$password = '%/[fWDDH4W25$i\Q';
$dbname = 'id15304214_users';
// Connecting DB
$conn = new mysqli($servername, $username, $password, $dbname);
// check conn
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$thread = $_POST['thread'];

$sql = "INSERT INTO threads (user, title, thread)VALUES ('user', '$title', '$thread');";

if ($conn->query($sql) === TRUE) {
  header("Location: https://webdevelopmentlj1.000webhostapp.com/thread.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>