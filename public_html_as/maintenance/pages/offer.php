<?php
$lname = $_POST['lname'];
$title = $_POST['title'];


$servername = "10.72.1.14
$username = "aasingh";
$password = "";
$db = "group2";

$conn -= new mysqli($servername, $username, $password, $db);
if(empty($lname) || empty($title))
{
    print "All fields are required";
}

if($conn->connect_error)
{
    die("Connection failed: ". $conn->connect_error);

}

$sql = "insert into offers() 
        values()"

conn->close();
?>
<a href="../index1.html">maintenance Page</a>