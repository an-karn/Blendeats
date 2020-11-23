<?php
$age_title = "Result Page";
include("../header.php") ?>

<body>

    <div class="container mt-5">
        <?php
        include("../conn.php");

        $fname = $_GET['foodname'];
        if (empty($fname)) {
            print "food name is Mandatory";
            // } elseif ($pricerange > 5) {
            //     print "Price range Not Defined";
        } else {


            $sql = "SELECT title, price ,fid  FROM food WHERE title like '%$fname%'";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<table class='table table-striped' >";
                    echo "<thead class='thead-dark'>
                    <tr>
                    <th scope='col'>Name</th>
                    <th scope='col'>Price</th>
                    <th scope='col'>View Food</th>

                    </tr>
                </thead> 
                <tbody>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>  $row[title]   </td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td> <a class='btn btn-primary' href = '../view/food_info.php?fid=$row[fid]' > VIEW  </a> </td>  ";
                        echo "</tr>";
                    }
                    echo "</tbody></table>";
                    mysqli_free_result($result);
                } else {
                    echo "No records matching your query were found.";
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
        }

        $conn->close();

        ?>
        <br>
        <a class="btn btn-primary" href="./">Search Page</a>

    </div>

</body>

</html>