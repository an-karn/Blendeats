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
        <h1>Packed Food </h1>
        <p>Submit date of expiry for Packed Food</p>

        <form action="../submit/s_packedfood.php" method="POST">


            <div class="form-group">

                <label for="choosefood">Select Food</label><br>
                <?php
                if ($result->num_rows > 0) {

                    echo '<select id="choosefood" class="form-control" name="choosefood">';
                    // output data of each row
                    echo '  <option value="" selected disabled >Choose Food</option>
                    ';
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value=' . $row["fid"] . '>' . $row["title"] . '</option>';
                    }

                    echo '</select>';
                } else {
                    echo "No User Found";
                }
                ?> </div>


            <div class="form-group">
                <label for="date">Date of Expiry</label>
                <input class="form-control" type="date" id="date" name="date">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>

        <p>By filling this form, you will add your food to packed-food.</p>

    </div>




    <?php $conn->close();
    include('../../footer.php') ?>

</body>

</html>