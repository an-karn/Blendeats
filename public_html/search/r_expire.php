<?php
$age_title="Result Page";
include("../header.php")?>
<body>

<div class="container mt-5">
<?php include("../conn.php");
    //$conn->open();

    $bestbefore= $_GET['bestbefore'];

   if(!empty($bestbefore)){

    $sql = "SELECT food.title, packaged_food.bestbefore, food.fid FROM food
     JOIN packaged_food ON food.fid = packaged_food.fid
     WHERE bestbefore < DATE_ADD(NOW(), INTERVAL $bestbefore MONTH) 
     AND bestbefore > NOW(); ";
     
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table class='table table-striped'>";
              echo "<thead class='thead-dark'><tr>";
                    echo "<th scope='col'>Name</th>";
                    echo "<th scope='col'>Bestbefore</th>";
                    echo "<th scope='col'>VIEW</th>";

                echo "</tr></thead><tbody>";
            while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td> $row[title]  </td>";
                    echo "<td>" . $row['bestbefore'] . "</td>";
                    echo "<td> <a class='btn btn-primary' href = '../view/food_info.php?fid=$row[fid]' > VIEW  </a> </td>  ";

                    echo "</tr>";
            }
            echo "</tbody></table>";
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}else{
    echo " Best Before is Mandatory";
}

    $conn->close();

?>
<br>
<a class ="btn btn-primary" href = "../search/">Search Page</a>

</div>

</body>
</html>
