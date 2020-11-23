<?php
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (isset($_SESSION['user'])) {
    header('Location: logout_msg.php');
}
?>

<?php include("../header.php") ;
?>


<body>
    <?php include('../nav.php') ?>


    <div class="container mt-5">
        <h1>Sign Up</h1>
        <form action="s_signup.php" method="POST">
            <div class="form-group">
                <label for="email">Email Id:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email id">
            </div><br>
            <div class="form-group">
                <label for="user">Username:</label><br>
                <input class="form-control" type="user" id="user" name="user">
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
    <a class="btn btn-link" href = "login.php"><center>Login<center></a>
    <?php include('../footer.php') ?>

</body>

</html>