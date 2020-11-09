<?php
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['user'])) {
header('Location: ../../login/login.php');
}
include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>


    <?php include("../../conn.php");


    $sql = "SELECT fid, title FROM food";
    $result = $conn->query($sql);
    ?>


    <div class="container mt-5">
        <h1>What is this food?</h1>
        <p>Submit food type</p>

        <form action="../submit/s_foodtype.php" method="POST">

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