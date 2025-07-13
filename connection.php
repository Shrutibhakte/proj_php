<?php

      $database = new mysqli("localhost:3307","root","","sample1");
     if ($database->connect_error){
         die("Connection failed:  ".$database->connect_error);
     }
    
?>

