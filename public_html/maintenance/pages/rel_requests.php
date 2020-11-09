<?php
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['user'])) {
header('Location: ../../login/login.php');
}
$page_title = 'Request - BlendEats';
include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>

    <?php include("../../conn.php");


    $sql_user = "SELECT uid, fname, lname FROM member";
    $sql_food = "SELECT fid, title FROM food";
    $user_result = $conn->query($sql_user);
    $food_result = $conn->query($sql_food);
    ?>


    <div class="container mt-5">
        <h1>Request food </h1>
        <p>Submit your request</p>


        <form action="../submit/s_rel_requests.php" method="POST">

            <div class="form-group">

                <label for="chooseuser">Select User </label>

                <?php
                if ($user_result->num_rows > 0) {
                    echo '<select id="chooseuser" class="form-control" name="chooseuser">';

                    echo '  <option value="" selected disabled >Choose User</option>';

                    // output data of each row
                    while ($row = $user_result->fetch_assoc()) {
                        echo '<option value=' . $row["uid"] . '>' . $row["fname"] . " " . $row["lname"] . '</option>';
                    }

                    echo '</select>';
                } else {
                    echo "No User Found";
                }
                ?>

            </div>

            <div class="form-group">

                <label for="choosefood">Select food </label>

                <?php
                if ($food_result->num_rows > 0) {
                    echo '<select id="choosefood" class="form-control" name="choosefood">';

                    echo '  <option value="" selected disabled >Choose food</option>';

                    // output data of each row
                    while ($row = $food_result->fetch_assoc()) {
                        echo '<option value=' . $row["fid"] . '>' . $row["title"] . '</option>';
                    }

                    echo '</select>';
                } else {
                    echo "No food Found";
                }
                ?>

            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
        <p>By filling this form, you will be able to request food</p>

    </div>



    <?php $conn->close();

    include('../../footer.php') ?>

</body>

</html>