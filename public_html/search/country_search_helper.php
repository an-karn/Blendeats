<?php
          include("../conn.php");
          if (isset($_GET["cname"])) {
               $query = "SELECT DISTINCT(country) FROM member WHERE country LIKE '".$_GET["cname"]."%' ";
               $result = mysqli_query($conn, $query);

               $res = array();
               if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                         array_push($res, $row['country']);
                    }
               }

               echo json_encode($res);
          }
