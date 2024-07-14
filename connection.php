<?php
   $servername = "localhost";
   $username = "root";
   $password  = "";
    $dbname = "basicform";

   $conn = mysqli_connect($servername,$username,$password,$dbname);


   if($conn)
   {
    echo "Connection successfully!";
   }
   else{
    echo "Connection Failed";
   }


?>