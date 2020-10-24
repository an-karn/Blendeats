<?php
$lname = $_POST['lname'];
$email = $_POST['email'];


$servername = "10.72.1.14
$username = "aasingh";
$password = "";
$db = "group2";

$conn -= new mysqli($servername, $username, $password, $db);
if(empty($lname) || empty($email))
{
    print "All fields are required";
}

if($conn->connect_error)
{
    die("Connection failed: ". $conn->connect_error);

}

$sql = "insert into register_with() 
        values()"

conn->close();
?>
<a href="../index1.html">maintenance Page</a>