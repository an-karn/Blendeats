<?php 
require("../header.php") ?>

<body>
    <?php include('../nav.php') ?>


    <div class="container mt-5">
        <h1>Login</h1>
        <form action="s_login.php" method="POST">
            <div class="form-group">
                <label for="user">Username:</label>
                <input type="user" class="form-control" id="user" name="user" placeholder="Username">
            </div><br>
            <div class="form-group">
                <label for="password">Password:</label><br>
                <input class="form-control" type="password" id="password" name="password">
            </div><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>

    </div>
    <a class="btn btn-link" href = "signup.php"><center>Sign Up<center></a>
 
    <?php include('../footer.php') ?>

</body>

</html>