<?php
include('../conn.php');
$uid_get = $_GET['uid'];

if (empty($uid_get)) {
    $page_title = "404";
    $errormsg = "404 ERROR uid is mandatory";
} else {

    $sql_user = "SELECT * FROM member where uid=$uid_get;";

    if (!($user_result = $conn->query($sql_user))) {
        $errormsg = "SQL ERROR";
    } else {

        if ($user_result->num_rows > 0) {

            while ($row = $user_result->fetch_assoc()) {
                $user_details = $row;
                $page_title = $row["fname"] . ' - Blend Eats';
            }

            $sqlfood = "SELECT offers.uid,food.fid,title,price from food JOIN offers
        on offers.fid=food.fid where uid=$user_details[uid]";

            if (!($food_result = $conn->query($sqlfood))) {
                $errormsg_food = "SQL ERROR";
            }
        } else {
            $page_title = "404";
            $errormsg = "No user found";
        }
    }
}
include("../header.php");
?>


<body>

    <?php include("../nav.php")
    ?>

    <div class="main-content">
        <div class="container mb-5 mt-5">

            <?php
            if (isset($errormsg)) {
                echo '<div class="alert alert-danger" role="alert">' . $errormsg . '</div>';
            } else if (isset($user_details)) {

                echo " <div class='row'>
                    <div class='col-3'>
                    <img src='../assets/img/user.png' alt=' $user_details[fname] 
                    $user_details[lname]' class='img-thumbnail'>

                    <h3>
                    $user_details[fname] 
                    $user_details[lname]

                    </h3>
                    -
                    <a href= '../search/search_result_country.php?country=$user_details[country]' >
                     $user_details[country] </a>
                    </div>
                    <div class='col-9'>";

                echo " <h3>BIO</h3>" . (($user_details['bio'] == NULL) ? "No Bio" : $user_details['bio']);

                echo " <br> <h3>Phone</h3> " . (($user_details['contact'] == NULL) ? "No Contact" : $user_details['contact']);

                echo " <br> <h3>Phone</h3> " . (($user_details['contact'] == NULL) ? "No Contact" : $user_details['contact']);

                echo "<h3>Food </h3>";
                if (isset($food_result)) {

                    if ($food_result->num_rows > 0) {

                        while ($row = $food_result->fetch_assoc()) {
                            echo "<a href='food_info.php?fid=$row[fid]'> $row[title] <span class='badge badge-secondary'> € $row[price]</span> </a><br>";
                        }
                    } else {
                        $errormsg_food = "No Food Offered";
                        echo $errormsg_food;
                    }
                } else {
                    echo " $errormsg_food ";
                }

                echo "</div>
                </div>";
            }



            $conn->close();
            ?>

        </div>

    </div>



    <?php include("../footer.php") ?>

</body>

</html>
<!DOCTYPE html>