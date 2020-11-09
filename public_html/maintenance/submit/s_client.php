<?php 
$age_title="Submit Page";
include("../../header.php")?>
<body>

<div class="container mt-5">
<?php include("../../conn.php");


  //default sucesss if error change color
  echo'<div class="alert alert-success" id="result"role="alert">';


    $user = $_POST['chooseuser'];
    $payment_post = $_POST['payment'];


    if (empty($user) || empty($payment_post)) {
        print "No field should be empty";
    } else {
        $sql = "INSERT INTO client(uid,preferred_payment) VALUES ($user,'$payment_post') ;
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