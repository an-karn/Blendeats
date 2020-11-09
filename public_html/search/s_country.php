<?php
session_start();


$page_title = 'Search by Country - BlendEats';
include('../header.php');
?>


<body>

    <?php include("../nav.php")
    ?>

    <div class="main-content">
        <div class="container-fluid mb-5 mt-5 centerr">
            <h3> Type Country Name to List all Users </h3>
            <form action="r_country.php" class=" row justify-content-md-center " method="GET">
                <input class="form-control col col-lg-5" name="country" type="search" placeholder="Country Name" aria-label="Search">
                <button class="btn bg-def btn-dark col col-lg-1 " type="submit">Search</button>
            </form>

        </div>

    </div>



    <?php include("../footer.php") ?>

</body>

</html>
<!DOCTYPE html>