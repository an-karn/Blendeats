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
        <h1>Cooked Food </h1>
        <p>Submit your ingredients for cooked food</p>

        <form action="../submit/s_cookedfood.php" method="POST">

            <div class="form-group">

                <label for="choosefood">Select Member</label><br>
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
                    echo "No User Found";
                }
                ?> </div>


            <div class="form-group">
                <label for="ingredients">Ingredients</label>
                <input class="form-control" type="text" id="ingredients" name="ingredients">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>

        <p>By filling this form, you will add your food to cooked-food.</p>

    </div>


    <?php 
        $conn->close();
        include('../../footer.php') ?>

</body>

</html>