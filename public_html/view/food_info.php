<?php 
$age_title="Details Page";
include("../header.php")?>
<body>
<?php include("../nav.php")?>
<div class="container mt-5">
<?php
   include("../conn.php");
   
    $fid = $_GET['fid'];

    $sql = "SELECT * FROM food WHERE fid = $fid ;";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            
            while($row = mysqli_fetch_array($result)){
                    echo "<h2>". $row['title'] . "</h2>";
                    echo "<h4>Price:</h4>  <p> " . $row['price'] ."</p> ";
                    echo " <H3>Description</H3><p>" . $row['description']. "</p>";
            }

            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    $conn->close();

?>
<br>
<a class ="btn btn-primary" href = "../search/">Search Page</a>

</div>
<?php include("../footer.php") ?>

</body>
</html>