<!DOCTYPE html>
<html lang="en">

<?php include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>


    <div class="container mt-5">
        <h1>List Your Food</h1>
        <p>Submit date of expiry for Packed Food</p>

        <form action="packedfood.php" method="POST">

            select food
            </br>
            </br>
            </br>

            <div class="form-group">
                <select id="foodtype" class="form-control" name="foodtype">
                    <option value="1">Vegan</option>
                    <option value="2">Vegetarian</option>
                    <option value="3">Non Veg Halal</option>
                    <option value="4">Non Veg</option>

                </select>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>

        <p>By filling this form, you will add your food to packed-food.</p>

    </div>


    <?php include('../../footer.php') ?>

</body>

</html>