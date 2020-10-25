<!DOCTYPE html>
<html lang="en">

<?php include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>


    <div class="container mt-5">
        <p>You need to fill this form to register as a Client.</p>

            <form action="member.php" method="POST">
            <div class="form-group">

                <label for="chooseuser">Select Member</label><br>
                <input class="form-control" type="text" id="fname" name="fname" placeholder="First Name">
                </div>

                <div class="form-group">

                <label for="payment">Choose Payment Method</label><br>
                <select id="payment" class="form-control" name="payment">
                    <option value="Cash">Cash</option>
                    <option value="Bank">Bank Transfer</option>
                    <option value="PayPal">PayPal</option>
                </select>
                </div>

                <input class="btn btn-primary" type="submit" value="Submit">

        </form>


        <p>By filling this form, you will be registered as a Client.</p>

    </div>


    <?php include('../../footer.php') ?>

</body>

</html>