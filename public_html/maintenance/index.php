<!DOCTYPE html>
<html lang="en">
<?php
$page_title = 'Maintenance - BlendEats';
$pgDesc = 'BlendEats Maintenance Page';
$keyWords = 'food,culture,world,food project';

include('../header.php');
?>


<body>

    <?php include('../nav.php')
    ?>

    <div class="container mt-5">
        <h2>Welcome to Maintenance Page</h2>
        <p> Here you will find all the form links to submit and fill all the details</p>


        <div class="row">
            <div class="col-sm">
                <h3>Entities</h3>
                <div class="list-group">
                    <a href="maintenance/pages/member.php" class="list-group-item mt-links list-group-item-action">
                        Sign Up Member </a>
                    <a href="maintenance/pages/account.php" class="list-group-item mt-links list-group-item-action">
                        Create Account</a>
                    <a href="maintenance/pages/admin.php" class="list-group-item mt-links list-group-item-action">
                        Add To Admin</a>
                        <a href="maintenance/pages/client.php" class="list-group-item mt-links list-group-item-action">
                        Add To Client</a>
                    <a href="maintenance/pages/food.php" class="list-group-item mt-links list-group-item-action">
                        Create Food </a>
                    <a href="maintenance/pages/packedfood.php" class="list-group-item mt-links list-group-item-action">
                        Add to Packed Food</a>
                    <a href="maintenance/pages/cookedfood.php" class="list-group-item mt-links list-group-item-action">
                        Add to Cooked Food</a>
                    <a href="maintenance/pages/foodtype.php" class="list-group-item mt-links list-group-item-action">
                        Define Food Type ( Veg / Nveg )</a>
                </div>
            </div>
            <div class="col-sm">
                <h3>Relations</h3>

                <div class="list-group">
                    <a href="maintenance/pages/rel_offers.php" class="list-group-item mt-links list-group-item-action">
                        Offer Food  </a>
                    <a href="maintenance/pages/rel_requests.php" class="list-group-item mt-links list-group-item-action">
                        Request Food</a>
                    <a href="maintenance/pages/rel_registers_with.php" class="list-group-item mt-links list-group-item-action">
                        Link Member to Account</a>
                </div>
            </div>

        </div>



    </div>

    <?php include('../footer.php') ?>


</body>

</html>
<!DOCTYPE html>