<!DOCTYPE html>
<html lang="en">

<?php include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>


    <div class="container mt-5">
        <p>You need to fill this form to register as a Admin.</p>

        <form action="member.php" method="POST">
            <div class="form-group">

                <label for="chooseuser">Select Member</label><br>
                <input class="form-control" type="text" id="fname" name="fname" placeholder="First Name">
            </div>

            <div class="form-group">
            <label for="permission">Select Permission</label><br>

                <select id="permission"class="form-control" name="permission">
                    <option value="1">Read, Write, Delete</option>
                    <option value="2">Read,Write</option>
                    <option value="3">Read</option>
                </select>
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


        <p>By filling this form, you will be registered as a Admin and Client(Default).</p>

    </div>


    <?php include('../../footer.php') ?>

</body>

</html>