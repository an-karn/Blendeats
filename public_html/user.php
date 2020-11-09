<?php
include("header.php");
include("nav.php");
session_start();
echo 'User: <br>';
echo 'Name : '.$_SESSION['fname'].' ' .$_SESSION['lname'].'<br>';
echo 'Country: '.$_SESSION['country'].'<br>';
include("footer.php")
?>