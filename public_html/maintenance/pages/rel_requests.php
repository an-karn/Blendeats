<!DOCTYPE html>
<html lang="en">

<?php include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>


    <div class="container mt-5">
        <h1>Request Food </h1>
        <p>Submit your request</p>

        <form action="rel_offers.php" method="POST">
            select user
            </br>

             select food
            </br>
            </br>
            
            <div class="form-group">
                <label for="message">Message</label>
                <input class="form-control" type="text" id="message" name="message">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
        <p>By filling this form, you will be able to request food</p>

    </div>


    <?php include('../../footer.php') ?>

</body>

</html>