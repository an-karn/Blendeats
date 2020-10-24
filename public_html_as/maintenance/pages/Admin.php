<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$country = $_POST['country'];
$bio = $_POST['bio'];
$contact = $_POST['contact'];
$permission = $_POST['permission'];
$file = $_POST['file'];

$servername = "10.72.1.14
$username = "aasingh";
$password = "";
$db = "group2";

$conn -= new mysqli($servername, $username, $password, $db);

if($conn->connect_error)
{
    die("Connection failed: ". $conn->connect_error);

}

if(empty($fname) || empty($lname) || empty($country) || empty($contact) || empty($permission))
{
    print "First Name, Last Name, Country, Permission and Contact are needed";
}

$sql = "insert into Admin(Fname,Lname,bio,profilepic,number,country,permission_type) 
        values('$fname','$lname','$bio','$file','$contact','$country','$permission')"

$sql = "insert into member(Fname,Lname,bio,profilepic,number,country) 
        values('$fname','$lname','$bio','$file','$contact','$country')"

conn->close();
?>
<a href="../index1.html">maintenance Page</a>
