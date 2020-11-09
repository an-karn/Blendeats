<?php
session_start();


include("../header.php") ?>

<body>
    <?php include('../nav.php') ?>

    <div class="container">
        <form action="r_expire.php" method="GET">
            <div class="form-group">
                <label  for="bestbefore"> Best Before (Months) </label>
                <input class='form-control' id="bestbefore" type="number" name="bestbefore"> 

            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>


    </div>

    <?php include('../footer.php') ?>

</body>

</html>