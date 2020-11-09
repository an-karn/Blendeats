<?php 
$age_title="Submit Page";
include("../header.php")?>
<body>

<div class="container mt-5">
<?php
    $servername = "10.72.1.14";
    $username = "group2";
    $dbpass = "6QOIHm";
    $dbname = "group2";

    //default success if error change color
    echo'<div class="alert alert-success" id="result"role="alert">';

    $conn = new mysqli($servername, $username, $dbpass, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        $success=FALSE;
    }
    $email = $_POST['email'];
    $user = $_POST['user'];
    $post_password = $_POST['password'];
    $post_rpassword = $_POST['rpassword'];

    if (empty($email) || empty($post_password) || empty($user) || empty($post_rpassword)) {
        print "No field should be empty";
    } else if ($post_password == $post_rpassword) {
        $sql = "INSERT INTO account(email,user,password) VALUES ('$email','$user','$post_password') ;";

        if ($conn->query($sql) === TRUE) {
            $success=TRUE;
            echo "New record created successfully";
        } else {
            $success=FALSE;

            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    } else {
        $success=FALSE;
        print "Repeated password is not the same as the password";
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
<a class ="btn btn-primary" href = "../">Back to HomePage</a>

</div>

</body>
</html>