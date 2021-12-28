<?php

    $dbServername = "localhost"; 
    $dbUsername = "root"; 
    $dbPassword = "root"; 
    $dbName = "localhost";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if ($conn == false) {
        die("No database connection");
    }
