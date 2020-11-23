<?php
    include("../header.php");
?>

<body>

    <?php include('../nav.php')
    ?>

    <div class="container mt-5">
        <h2>Welcome to the search page</h2>

    <form action="main/admin.php" method="POST">
        <div class="row">
            <div class="col-sm">
                <div class="list-group">
                    <a href="s_foodprice.php" class="list-group-item mt-links list-group-item-action">
                        Filter according to price </a>
                        <a href="s_expire.php" class="list-group-item mt-links list-group-item-action">
                        Filter By Expiry Date</a>
                        <a href="s_country.php" class="list-group-item mt-links list-group-item-action">
                        Search Country </a>
                        <a href="s_food.php" class="list-group-item mt-links list-group-item-action">
                        Search Food </a>
                </div>
            </div>


        </div>



    </div>

    <?php include('../footer.php') ?>


</body>

</html>
<!DOCTYPE html>