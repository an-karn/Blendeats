<!DOCTYPE html>
<html lang="en">

<?php include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>


    <div class="container mt-5">
        <h1>Cooked Food </h1>
        <p>Submit your ingredients for cooked food</p>

        <form action="cookedfood.php" method="POST">

            select food
            </br>
            </br>
            </br>

            <div class="form-group">
                <label for="ingredients">Ingredients</label>
                <input class="form-control" type="text" id="ingredients" name="ingredients">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>

        <p>By filling this form, you will add your food to cooked-food.</p>

    </div>


    <?php include('../../footer.php') ?>

</body>

</html>