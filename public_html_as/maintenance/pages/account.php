<?php
$email = $_POST['email'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];

$servername = "10.72.1.14
$username = "aasingh";
$password = "";
$db = "group2";

$conn -= new mysqli($servername, $username, $password, $db);

if($conn->connect_error)
{
    die("Connection failed: ". $conn->connect_error);

}

if(empty($email) || empty($password))
{
    print "No field should be empty";
}
else if($password == $rpassword)
{
    print "Repeated password is not the same as the password";
}

$sql = "insert into Account(email,password) 
        values('$email','$password')"

conn->close();
?>
<a href="../index1.html">maintenance Page</a>
