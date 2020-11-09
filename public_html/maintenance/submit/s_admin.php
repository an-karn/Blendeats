<?php 
$age_title="Submit Page";
include("../../header.php")?>
<body>

<div class="container mt-5">
<?php include("../../conn.php");


  //default successs if error change color
  echo'<div class="alert alert-success" id="result"role="alert">';



    $user = $_POST['chooseuser'];
    $permission_post = $_POST['permission'];
    // $payment_post = $_POST['payment'];


    if (empty($user) || empty($permission_post)) {
        $success = FALSE;
        print "No field should be empty";
    } else {
        $sql = "INSERT INTO admin(uid,permission_type) VALUES ($user,'$permission_post') ;
        
        ";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully ( ADMIN )";
            $success=TRUE;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $success=FALSE;
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
