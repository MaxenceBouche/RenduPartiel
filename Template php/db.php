<?php

  $server = "localhost";
  $user = "root";
  $pass = "root";
  $database = "php";
  

     $conn = mysqli_connect($server, $user, $pass, $database);
     if ($conn->connect_error) {
        die('Connection failed: ' . $cconn->connect_error);
    } else
  ?>
