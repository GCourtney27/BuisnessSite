<?php

    $host = "localhost"; // Wamp host name
    $username = "root"; // username for phpMyAdmin
    $password = ""; // password for phpMyAdmin
    $db_name = "buisnesssite"; // database name you are trying to access

    $sql_inst = new mysqli($host, $username, $password, $db_name);

    if(mysqli_connect_errno()){
        echo "Fatal error: Could not connect to sql database.";
        exit;
    }

?>