<?php
$servername = "10.72.1.14";
$username = "group2";
$password = "6QOIHm";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
