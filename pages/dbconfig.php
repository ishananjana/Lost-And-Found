<?php
$servername = "127.0.0.1";
$username = "root";
$password = "mariadb";
$database = "lost_and_found";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
  //  echo "connect succfull";
}
?>
