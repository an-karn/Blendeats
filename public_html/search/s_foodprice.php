<?php
session_start();


include("../header.php") ?>

<body>
    <?php include('../nav.php') ?>

<div class="container">
<label>Search according to price</label>
<form action="r_foodprice.php" method="GET">
<div class="form-group">
                <select id="pricerange" class="form-control" name="pricerange">
                    <option value="1">< 5</option>
                    <option value="2">5 - 10</option>
                    <option value="3">10 - 15</option>
                    <option value="4">15 - 20</option>
                    <option value="5">> 20</option>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
</form>


</div>
<?php include('../footer.php') ?>

</body>

</html>