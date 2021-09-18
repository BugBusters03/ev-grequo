<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "quora1";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
      
    // Validate database connection
    if(!$connection){
        die('Database connection error : ' .mysql_error());
    }
    
?>