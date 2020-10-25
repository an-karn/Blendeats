<!DOCTYPE html>
<html lang="en">

<?php include("../../header.php") ?>

<body>
    <?php include('../../nav.php') ?>

<?php 

include('../../conn.php');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT uid, Fname, Lname FROM member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["uid"]. " - FName: " . $row["Fname"]. " " . $row["Lname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
    
    <div class="container mt-5">
        <p>You need to fill this form to register as a member.</p>

        <form action="member.php" method="POST">
            <div class="form-group">

                <label for="fname">First name:</label>
                <input class="form-control" type="text" id="fname" name="fname" placeholder="First Name">
            </div>

            <div class="form-group">

                <label for="lname">Last name:</label>
                <input class="form-control" type="text" id="lname" name="lname" placeholder="Last Name">
            </div>

            <div class="form-group">

                <label for="country">Country:</label>
                <input class="form-control" type="text" id="country" name="country" placeholder="Country">
            </div>

            <div class="form-group">

                <label for="bio">Bio:</label>
                <input class="form-control" type="text" id="bio" name="bio" placeholder="Bio">
            </div>

            <div class="form-group">

                <label for="contact">Contact:</label>
                <input class="form-control" type="tel" id="contact" name="contact">
            </div>

            <div class="form-group">

                <label for="file">Please choose a picture:</label>
                <input class="form-control-file" type="file" name="file" id="file">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>


        <p>By filling this form, you will be registered as a member.</p>

    </div>


    <?php include('../../footer.php') ?>

</body>

</html>