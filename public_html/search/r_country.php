<?php
$page_title = 'BlendEats';
$pgDesc = 'BlendEats Search Page ';
$keyWords = 'food,culture,world,food project';
include('../header.php');

include("../conn.php");
?>


<body>

    <?php include("../nav.php")
    ?>

    <div class="main-content">
        <div class="container mb-5 mt-5 centerr">

            <h3> Listing All Users </h3>
            <?php


            $country_name = $_GET['country'];

            if (empty($country_name)) {
                print "Country name is Mandatory";
            } else {
                $sql_user = "SELECT uid,fname,lname,country FROM member where country='$country_name';";

                $user_result = $conn->query($sql_user);

                if ($user_result->num_rows > 0) {
                    // output data of each row

                    echo "<table class='table table-striped'>
                            <thead class='thead-dark'>
                                <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>First</th>
                                <th scope='col'>Last</th>
                                <th scope='col'>View Profile</th>

                                </tr>
                            </thead> 
                            <tbody>";

                    while ($row = $user_result->fetch_assoc()) {
                        echo "<tr><td> $row[uid] </td><td>$row[fname]</td><td> $row[lname] 
                            </td> <td><a class='btn btn-primary' href='../view/user_info.php?uid=$row[uid]'> VIEW</a></td></tr>";
                        }

                    echo "</tbody> </table>";

                } else {
                    echo " No users found";
                }
                echo '<a class="btn btn-primary" href="./">Search Page</a>';

            }

            $conn->close();
            ?>

        </div>

    </div>



    <?php include("../footer.php") ?>

</body>

</html>
<!DOCTYPE html>