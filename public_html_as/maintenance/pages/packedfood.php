<?php
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$bestbefore = $_POST['bestbefore'];
$Type1 = $_POST['Type1'];
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

if(empty($title) || empty($bestbefore))
{
    print "Title and Best Before date is required";
}
else if(empty($price) || price < 1)
{
    print "Price is required and should be more than 0 ";
}

$sql = "insert into Packaged_Food(Title,description,image,price,bestbefore) 
        values('$title','$description','$file','$price','$bestbefore')";
$sql = "insert into Food(Title,description,image,price,bestbefore) 
        values('$title','$description','$file','$price','$bestbefore')";
if($Type1 == "Vegan")
{
    $sql = "insert into Vegan(Title,description,image,price)
            values('$title','$description','$file','$price')";
    
}
else if($Type1 == "Vegetarian")
{
    $sql = "insert into Vegetarian(Title,description,image,price)
            values('$title','$description','$file','$price')";
    
}
else if($Type1 == "Halal")
{
    $sql = "insert into n_veg_halal(Title,description,image,price)
            values('$title','$description','$file','$price')";
    
}
else
{
    $sql = "insert into n_veg_n_halal(Title,description,image,price)
            values('$title','$description','$file','$price')";
    
}
if($conn->query($sql) === TRUE)
{
    echo "DATA ADDED SUCCESSFULLY";
}
else
{
    echo "ERROR ADDING DATA";
}
conn->close();
?>
<a href="../index1.html">maintenance Page</a>
