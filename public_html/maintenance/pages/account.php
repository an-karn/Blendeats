<!DOCTYPE html>
<html lang="en">

<?php include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>


    <div class="container mt-5">
        <h1>Create Your Account</h1>
        <p>Please fill this form to create an Account</p>
        <form action="/maintenance/submit/s_account.php" method="POST">
            <div class="form-group">
                <label for="email">Email Id:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email id">
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
 
    <?php include('../../footer.php') ?>

</body>

</html>