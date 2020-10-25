<!DOCTYPE html>
<html lang="en">

<?php include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>


    <div class="container mt-5">
        <h1>Create Your Account</h1>
        <p>fillout this form for account creation</p>
        <form action="account.php" method="POST">
            <div class="form-group">
                <label for="email">Email Id:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email id">
            </div>
            <div class="form-group">

                <label for="password">Password:</label><br>
                <input class="form-control" type="password" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="rpassword">Repeat Password:</label>
                <input class="form-control" type="password" id="rpassword" name="rpassword">

            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>

        <p>By filling this form, you will create a login account.</p>

    </div>


    <?php include('../../footer.php') ?>

</body>

</html>