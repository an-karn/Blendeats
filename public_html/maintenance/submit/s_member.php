<?php 
$age_title="Submit Page";
include("../../header.php")?>
<body>

<div class="container mt-5">
<?php include("../../conn.php");

  //default success if error change color
  echo'<div class="alert alert-success" id="result"role="alert">';
    $fname_post = $_POST['fname'];
    $lname_post = $_POST['lname'];
    $email = $_POST['email'];
    $bio_post = $_POST['bio'];
    $profile_pic =$_POST['file'];
    $number_post = $_POST['contact'];
    $country_post = $_POST['country'];


    $bio_post = empty($bio_post) ? "NULL" : "'$bio_post'";
    $profile_pic =empty($profile_pic) ? "NULL" : "'$profile_pics'";
    $number_post = empty($number_post) ? "NULL" : "'$number_post'";



    if (empty($fname_post) || empty($lname_post) || empty($email) || empty($country_post)) {
        $success = FALSE;
        print "Name and Country are Mandatory";
    } 
    else if(strlen($bio_post) > 250)
    {
        print "Bio should not exceed 250 characters";
    }
    else if(strlen($number_post) > 15)
    {
        print "Contact should not exceed 15 characters";
    }
    else {
        $sql = "INSERT INTO member(fname, lname,email, bio, profilepic, contact , country) 
        VALUES ('$fname_post','$lname_post','$email',$bio_post,$profile_pic, $number_post,'$country_post') ;
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