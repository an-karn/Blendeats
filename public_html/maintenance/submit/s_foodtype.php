<?php 
$age_title="Submit Page";
include("../../header.php")?>
<body>

<div class="container mt-5">
<?php include("../../conn.php");


      //default success if error change color
      echo'<div class="alert alert-success" id="result"role="alert">';

   
    $food_post = $_POST['choosefood'];
    $ftype_post = $_POST['foodtype'];


    if (empty($food_post) || empty($ftype_post)) {
        print "No field should be empty";
        $sucess=FALSE;
    } else {
        if($ftype_post==1){
            $ent= "vegan";

        }
        else if($ftype_post==2){
            $ent= "vegetarian";

        }
        else if($ftype_post==3){
            $ent= "n_veg_halal";

        }
        else if($ftype_post==4){
            $ent= "n_veg";

        }
            
        $sql = "INSERT INTO "  . $ent ."(fid) VALUES ($food_post) ;
        ";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            $sucess=TRUE;

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $sucess=FALSE;
        }
    }

    
    echo '</div>';

    if (!$sucess) {
        echo'<script>
        document.getElementById("result").className = " alert alert-danger"; 
        </script>';
    } 
    $conn->close(); 
    ?>
<br>
<a class ="btn btn-primary" href = "../">Maintenance Page</a>

</div>

</body>
</html>
