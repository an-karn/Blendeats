<?php 
session_start();
// for clamv subdirectory issue
// replace with  /~username/ for clamv upload
$home = "/~igiri/" ?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $home.'assets/css/bootstrap.min.css'  ?>">
    <link rel="stylesheet" href="<?php echo $home. 'assets/css/style.css'?> ">

    <title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $pgDesc ?>"></meta>
<meta name="keywords" content="<?php echo $keyWords ?>"></meta>

</head>
