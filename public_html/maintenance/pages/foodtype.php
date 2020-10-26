<!DOCTYPE html>
<html lang="en">

<?php include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>


    <?php
    $servername = "10.72.1.14";
    $username = "group2";
    $dbpass = "6QOIHm";
    $dbname = "group2";


    $conn = new mysqli($servername, $username, $dbpass, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT fid, title FROM food";
    $result = $conn->query($sql);
    ?>


    <div class="container mt-5">
        <h1>What is this food?</h1>
        <p>Submit food type</p>

        <form action="/maintenance/submit/s_foodtype.php" method="POST">

            <label for="choosefood">Select Member</label><br>

            <div class="form-group">

                <?php
                if ($result->num_rows > 0) {
                    echo '<select id="choosefood" class="form-control" name="choosefood">';

                    echo '  <option value="" selected disabled >Choose Food</option>';

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value=' . $row["fid"] . '>' . $row["title"] . '</option>';
                    }

                    echo '</select>';
                } else {
                    echo "No Food Found";
                }
                ?>

            </div>

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

        <p>By filling this form, you will add your food to food type entity.</p>

    </div>





    <?php $conn->close();

    include('../../footer.php') ?>

</body>

</html>