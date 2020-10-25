<!DOCTYPE html>
<html lang="en">

<?php include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>


    <div class="container mt-5">
        <h1>Create Your Account</h1>
        <p>Please fill this form to create an Account</p>
        <form action="account.php" method="POST">
            <div class="form-group">
                <label for="email">Email Id:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email id">
            </div><br>
            <div class="form-group">

                <label for="password">Password:</label><br>
                <input class="form-control" type="password" id="password" name="password">
            </div><br>

            <div class="form-group">
                <label for="rpassword">Repeat Password:</label>
                <input class="form-control" type="password" id="rpassword" name="rpassword">

            </div><br>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>

        <p>By filling this form, you will create a login account.</p>

    </div>

    <?php
    	$servername = "10.72.1.14";
        $username = "group2";
        $password = "6QOIHm";
        
        $conn -= new mysqli($servername, $username, $password);
        if($conn->connect_error)
        {
            die("Connection failed: ". $conn->connect_error);
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];
        
          if(empty($email) || empty($password))
          {
              print "No field should be empty";
          }
          else if($password == $rpassword)
          {
              print "Repeated password is not the same as the password";
          }
          $sql = "insert into Account(email,password) 
                  values('$email','$password')"
    ?>
    <?php include('../../footer.php')?>
    <a href="../index1.html">maintenance Page</a>

</body>

</html>
