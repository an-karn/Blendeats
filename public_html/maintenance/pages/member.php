<?php
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['user'])) {
header('Location: ../../login/login.php');
}
include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>

    <div class="container mt-5">
        <p>You need to fill this form to register as a member.</p>

        <form action="../submit/s_member.php" method="POST">
            <div class="form-group">

                <label for="fname">First name:</label>
                <input class="form-control" type="text" id="fname" name="fname" placeholder="First Name">
            </div>

            <div class="form-group">

                <label for="lname">Last name:</label>
                <input class="form-control" type="text" id="lname" name="lname" placeholder="Last Name">
            </div>
            <div class="form-group">

                <label for="email">Email:</label>
                <input class="form-control" type="text" id="email" name="email" placeholder="Email id">
            </div>

            <div class="form-group">

                <label for="country">Country:</label>
                <input class="form-control" type="text" id="country" name="country" placeholder="Country">
            </div>

            <div class="form-group">

                <label for="bio">Bio:</label>
                <input class="form-control" type="text" id="bio" name="bio" placeholder="Bio">
            </div>

            <div class="form-group">

                <label for="contact">Contact:</label>
                <input class="form-control" type="tel" id="contact" name="contact">
            </div>

            <div class="form-group">

                <label for="file">Please choose a picture:</label>
                <input class="form-control-file" type="file" name="file" id="file">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>


        <p>By filling this form, you will be registered as a member.</p>

    </div>

    
    <?php 
    include('../../footer.php') ?>

</body>

</html>