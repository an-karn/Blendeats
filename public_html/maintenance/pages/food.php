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
        <h1>What are you selling ???</h1>
        <p>You need to fill this form to list your food item</p>
        <form action="../submit/s_food.php" method="POST">

            <div class="form-group">
                <label for="title">Title:</label>
                <input class="form-control" type="text" id="title" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input class="form-control" type="text" id="description" name="description" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input class="form-control" type="number" id="price" name="price" placeholder="Price">
            </div>

            <div class="form-group">
                <label for="file">Picture:</label>
                <input class="form-control-file" type="file" name="file" id="file">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>

        <p>By filling this form, you can sell food.</p>

    </div>


    <?php include('../../footer.php') ?>

</body>

</html>