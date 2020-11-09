<?php 
$age_title="Submit Page";
include("../../header.php")?>
<body>

<div class="container mt-5">
<?php include("../../conn.php");


      //default success if error change color
      echo'<div class="alert alert-success" id="result"role="alert">';


    $food_post = $_POST['choosefood'];
    $ingredients_post = $_POST['ingredients'];

    $ingredients_post = empty($ingredients_post) ? "NULL" : "'$ingredients_post'";


    if (empty($food_post) || empty($ingredients_post)) {
        $success = FALSE;
        print "No field should be empty";
    } else {
        $sql = "INSERT INTO cooked_food(fid,ingredients) VALUES ($food_post,$ingredients_post) ;
        ";
        if ($conn->query($sql) === TRUE) {
            $success = TRUE;
            echo "New record created successfully";
        } else {
            $success = FALSE;
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    echo '</div>';

    if (!$success) {
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

