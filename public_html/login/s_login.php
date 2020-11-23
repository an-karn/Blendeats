<?php session_start();
include("../header.php");
?>

<body>

    <div class="container mt-5">
        <?php

        include("../conn.php");
        //default success if error change color
        echo '<div class="alert alert-success" id="result"role="alert">';

        if (!isset($_SESSION['user'])) {


            if (isset($_POST['submit'])) {


                $user = $_POST['user'];
                $password = $_POST['password'];

                //to prevent mysql injection
                //  $user = stripcslashes($user);
                //  $password = stripcslashes($password);
                // $user = mysql_real_escape_string($user);
                // $password = mysql_real_escape_string($password);

                //Query database
                $sql = "SELECT * FROM member INNER JOIN account ON member.email = account.email 
                        INNER JOIN admin ON member.uid = admin.uid
                        WHERE account.user = '$user' AND account.password = $password";
                //  $result = mysql_query($conn,$sql);
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        //TODO
                        // Fetch data of user  and add it to session

                        if ($row['user'] == $user && $row['password'] == $password) {
                            $success = TRUE;

                            //echo "Login success !!! Welcome " . $row['user'];
                            header("Location:../index.php");
                            //redirecting
                            $_SESSION['user'] = $user;
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['fname'] = $row['fname'];
                            $_SESSION['lname'] = $row['lname'];
                            $_SESSION['country'] = $row['country'];
                        } else {
                            $success = FALSE;
                            echo "Failed login";
                        }
                    }
                } else {
                    $success = FALSE;
                    echo "Invalid user or password";
                }
            } else {
                echo "Form Not submitted properly";
            }

           
        }else{
            $success=TRUE;
            echo "Already Logged In";
        }
        echo '</div>';
            if (!$success) {

                echo " <br>
        <a class='btn btn-primary' href='./login.php'>Back To Login Page</a>
            ";
                echo '<script>
        document.getElementById("result").className = " alert alert-danger"; 
        </script>';
            } else {
                echo " <br>
            <a class='btn btn-primary' href='../index.php'>Back To HomePage</a>
                ";
            }
       

        $conn->close();
        ?>

    </div>

</body>

</html>