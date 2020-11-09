<?php
$age_title = "Result Page";
include("../header.php") ?>

<body>

    <div class="container mt-5">
        <?php
        include("../conn.php");

        $pricerange = $_GET['pricerange'];
        if (empty($pricerange)) {
            print "Price range is Mandatory";
            // } elseif ($pricerange > 5) {
            //     print "Price range Not Defined";
        } else {

            switch ($pricerange) {
                case 1:
                    $pricerange = "price BETWEEN 0 AND 5";
                    break;
                case 2:
                    $pricerange = "price BETWEEN 5 AND 10";
                    break;
                case 3:
                    $pricerange = "price BETWEEN 10 AND 15";
                    break;
                case 4:
                    $pricerange = "price BETWEEN 15 AND 20";
                    break;
                default:
                    $pricerange = "price >=21";
            }
            $sql = "SELECT title, price ,fid  FROM food WHERE $pricerange;";
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