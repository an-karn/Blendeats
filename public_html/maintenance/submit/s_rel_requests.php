<?php 
$age_title="Submit Page";
include("../../header.php")?>
<body>

<div class="container mt-5">
  <?php include("../../conn.php");

  //default success if error change color
  echo'<div class="alert alert-success" id="result"role="alert">';

    $uid_post = $_POST['chooseuser'];
    $fid_post = $_POST['choosefood'];
    $message_post = $_POST['message'];

    $message_post = empty($message_post)? "NULL" :"'$message_post'"  ;


    if (empty($uid_post) || empty($uid_post)) {
        $success = FALSE;
        print "No field should be empty";
    } else {

        $sql = "INSERT INTO   requests(uid,fid,message) VALUES ($uid_post,$fid_post,$message_post) ;";
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