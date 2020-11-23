<?php  
include("../conn.php");
 if(isset($_GET["fname"]))  
 {  
      $query = "SELECT title FROM food WHERE title LIKE '".$_GET["fname"]."%'";  
      $result = mysqli_query($conn, $query);  

      $res=array();
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
               array_push($res,$row['title']);

           }  
      }  

      echo json_encode($res);  
 }
 ?>  