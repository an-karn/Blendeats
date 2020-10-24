<?php
$message = $_POST['message'];


$servername = "10.72.1.14
$username = "aasingh";
$password = "";
$db = "group2";

$conn -= new mysqli($servername, $username, $password, $db);

if($conn->connect_error)
{
    die("Connection failed: ". $conn->connect_error);

}

$sql = "insert into Requests(message) 
        values('$message')"

conn->close();
?>
<a href="../index1.html">maintenance Page</a>