<!DOCTYPE html>
<html lang="en">

<?php include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>


    <div class="container mt-5">
        <h1>Packed Food </h1>
        <p>Submit date of expiry for Packed Food</p>

        <form action="rel_offers.php" method="POST">
            select user
             select food
            </br>
            </br>
            </br>
            
            <div class="form-group">
                <label for="message">Message</label>
                <input class="form-control" type="date" id="date" name="date">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>

        <p>By filling this form, you will request food</p>

    </div>


    <?php include('../../footer.php') ?>

</body>

</html>