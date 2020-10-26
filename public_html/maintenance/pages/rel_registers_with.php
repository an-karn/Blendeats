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

    $sql_user = "SELECT uid, fname, lname FROM member";
    $sql_account = "SELECT loginid, email FROM account";
    $user_result = $conn->query($sql_user);
    $account_result = $conn->query($sql_account);
    ?>



    <div class="container mt-5">
        <h1>Link Member to account</h1>
        <p>Submit your details</p>

        <form action="/maintenance/submit/s_rel_registers_with.php" method="POST">

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
                    echo "<br>No User Found";
                }
                ?>

            </div>

            <div class="form-group">
                <label for="chooseaccount">Select account </label>

                <?php
                if ($account_result->num_rows > 0) {
                    echo '<select id="chooseaccount" class="form-control" name="chooseaccount">';

                    echo '  <option value="" selected disabled >Choose account</option>';

                    // output data of each row
                    while ($row = $account_result->fetch_assoc()) {
                        echo '<option value=' . $row["loginid"] . '>' . $row["email"] . '</option>';
                    }

                    echo '</select>';
                } else {
                    echo "<br>No account Found";
                }
                ?>

            </div>

            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
        <p>By filling this form, you will be able to link your account</p>

    </div>



    <?php
    $conn->close();
    include('../../footer.php') ?>

</body>

</html>