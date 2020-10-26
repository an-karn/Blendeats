<!DOCTYPE html>
<html lang="en">

<?php include("../header.php") ?>

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


    $sql = "SELECT uid, fname FROM member";
    $result = $conn->query($sql);
    ?>

    <div class="container mt-5">
        <p>You need to fill this form to register as a Client.</p>

        <form action="../submit/s_client.php" method="POST">
            <div class="form-group">

                <label for="chooseuser">Select Member</label><br>
                <?php
                if ($result->num_rows > 0) {
                    echo '<select id="chooseuser" class="form-control" name="chooseuser">';
                    echo '  <option value="" selected disabled >Choose User</option>
                    ';
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value=' . $row["uid"] . '>' . $row["fname"] . '</option>';
                    }

                    echo '</select>';
                } else {
                    echo "No User Found";
                }
                ?> </div>

            <div class="form-group">

                <label for="payment">Choose Payment Method</label><br>
                <select id="payment" class="form-control" name="payment">
                <option value="" selected disabled >Choose Payment Method</option>' ;

                    <option value="Cash">Cash</option>
                    <option value="Bank-Transfer">Bank Transfer</option>
                    <option value="PayPal">PayPal</option>
                </select>
            </div>

            <input class="btn btn-primary" type="submit" value="Submit">

        </form>


        <p>By filling this form, you will be registered as a Client.</p>

    </div>


    <?php $conn->close();

    include('../../footer.php') ?>

</body>

</html>